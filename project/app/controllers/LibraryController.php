<?php

class LibraryController extends BaseController {
	public function upload_image($file, $ruta)
	{
		$extension = File::extension($file->getClientOriginalName());
		$time = time();
		$miImg = $time.'.'.$extension;
		while (file_exists($ruta.'/'.$miImg)) {
			$time = time();
			$miImg = $time.'.'.$extension;
		}
        $file->move($ruta,$miImg);
        return $miImg;
	}
	public function getNewFile()
	{
		$title = "Nuevo archivo | Funda Epékeina";

		return View::make('admin.library.new')
		->with('title',$title);
	}
	public function postNewFile()
	{
		$data  = Input::all();
		$rules = array(
			'title'				=> 'required|min:4|max:100',
			'type'				=> 'required|in:libros,articulos-de-investigacion,informes,cuento,boletin',
			'autor'				=> 'sometimes|min:4|max:100',
			'publication_date'	=> 'sometimes|date_format:d/m/Y',
			'description'		=> 'sometimes|min:4|max:2000',
			'portada'			=> 'sometimes|image|max:3000',
			'file'				=> 'required|mimes:doc,docx,pdf',
		);
		$msg  = array();
		$attr = array(
			'title' 			=> 'titulo',
			'type'  			=> 'tipo de publicación',
			'publication_date'	=> 'fecha de publicación',
			'description'		=> 'descripción',
			'file'				=> 'documento'
		); 
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$library 					= new LibraryFile;
		$library->title 			= $data['title'];
		$library->slug              = str_replace(' ','-',strtolower($data['title']));
		$library->type 				= $data['type'];
		if (Input::has('autor')) {
			$library->autor 			= $data['autor'];
		}
		if (Input::has('publication_date')) {
			$library->publication_date 	= date('Y-m-d',strtotime($data['publication_date']));
		}
		if (Input::has('description')) {
			$library->description 	= $data['description'];
		}
		if (Input::hasFile('portada')) {
			$portada = Input::file('portada');
			$library->portada = $this->upload_image($portada,'redjoven/biblioteca/images/');
		}
		$file = Input::file('file');
		$library->file              = $this->upload_image($file, storage_path().'/biblioteca/');
		$library->save();

		Session::flash('success', 'Se ha cargado el documento satisfactoriamente.');
		return Redirect::back();
	}
	public function getFiles()
	{
		$title = "Ver archivos | Funda Epékeina";

		$files = LibraryFile::get();
		return View::make('admin.library.show')
		->with('title',$title)
		->with('files',$files);
	}
	public function downloadFile($id){
	
		$row = LibraryFile::find($id);
		if (!is_null($row)) {
			$path = storage_path().'/biblioteca/'.$row->file;
			$name = $row->title.'.'.File::extension($path);
			return Response::download($path,$name, 
			[
            		'Content-Length: '. File::size($path)
        	]);
		}
	}
	public function getMdfFile($id)
	{
		$file = LibraryFile::find($id);
		$title = "Modificar archivo | Funda Epékeina";

		return View::make('admin.library.mdf')
		->with('title',$title)
		->with('file',$file);
	}
	public function postMdfFile($id)
	{
		$data  = Input::all();
		$rules = array(
			'title'				=> 'required|min:4|max:100',
			'type'				=> 'required|in:libros,articulos-de-investigacion,informes,cuento,boletin',
			'autor'				=> 'sometimes|min:4|max:100',
			'publication_date'	=> 'sometimes|date_format:d/m/Y',
			'description'		=> 'sometimes|min:4|max:2000',
			'portada'			=> 'sometimes|image|max:3000',
			'file'				=> 'sometimes|mimes:doc,docx,pdf',
		);
		$msg  = array();
		$attr = array(
			'title' 			=> 'titulo',
			'type'  			=> 'tipo de publicación',
			'publication_date'	=> 'fecha de publicación',
			'description'		=> 'descripción',
			'portada'			=> 'portada',
			'file'				=> 'documento'
		); 
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$library 					= LibraryFile::find($id);
		$library->title 			= $data['title'];
		$library->slug              = str_replace(' ','-',strtolower($data['title']));
		$library->type 				= $data['type'];
		if (Input::has('autor')) {
			$library->autor 			= $data['autor'];
		}
		if (Input::has('publication_date')) {
			$library->publication_date 	= date('Y-m-d',strtotime($data['publication_date']));
		}
		if (Input::has('description')) {
			$library->description 	= $data['description'];
		}
		if (Input::hasFile('portada')) {
			$portada = Input::file('portada');
			$library->portada = $this->upload_image($portada,'redjoven/biblioteca/images/');
		}
		if (Input::hasFile('file')) {
			$file = Input::file('file');
			$library->file              = $this->upload_image($file, storage_path().'/biblioteca/');
		}
		if (Input::has('remove-portada')) {
			$library->portada = "";
		}
		$library->save();

		Session::flash('success', 'Se ha modificado el documento satisfactoriamente.');
		return Redirect::back();
	}
	public function postElimFile()
	{
		$id = Input::get('id');
		$file = LibraryFile::find($id);
		$path = storage_path().'/biblioteca/'.$file->file;

		File::delete($path);
		$file->delete();
		return Response::json(array(
			'type' => 'success',
			'msg'  => 'Se ha eliminado el archivo satisfactoriamente.'
		));

	}
	public function getIndex()
	{
		$title  = "Biblioteca Virtual | Funda Epékeina";
		$active = "library";
		$files  = new LibraryFile;
		$paginatorFilter = "";
		$view = View::make('library.index');
		if (Input::has('busq')) {
			$busq  = Input::get('busq');
			if (!empty($busq)) {
				$files = $files->where(function($query) use ($busq){
					$query->where('title','LIKE',$busq.'%')
					->orWhere('title','LIKE','%'.$busq.'%')
					->orWhere('title','LIKE','%'.$busq)
					->orWhere('description','LIKE',$busq.'%')
					->orWhere('description','LIKE','%'.$busq.'%')
					->orWhere('description','LIKE','%'.$busq);
				});
				$paginatorFilter .= '&busq='.$busq;
				$view = $view->with('busq',$busq);
			}
		}
		if (Input::has('type')) {
			$type = Input::get('type');
			if (!empty($type)) {
				$files = $files->where('type','=',$type);
				$paginatorFilter .= '&type='.$type;
				$view = $view->with('type',$type);
			}
		}
		$files = $files->orderBy('id','DESC')->paginate(6);
		return $view
		->with('title',$title)
		->with('collection',$files)
		->with('size','big')
		->with('busq','')
		->with('paginatorFilter',$paginatorFilter);
	}
}