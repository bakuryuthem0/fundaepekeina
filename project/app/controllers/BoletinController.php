<?php

class BoletinController extends BaseController {
	public function getBoletinAdmin()
	{
		$data = Input::all();
		$rules = [
			'name' => 'required',
			'art'  => 'required|min:1'
		];
		$msg  = [];
		$attr = [
			'name'	=> 'Nombre del boletin',
			'art'	=> 'Noticias',
		];
		$validator = Validator::make($data, $rules, $msg, $attr);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$article = Articulo::with('imagenes')
		->with('slugs')
		->with('titles');

		$principal = "";
		if (Input::has('principal')) {
			$principal = Articulo::with('imagenes')
			->with('slugs')
			->with('titles')
			->with('descriptions')
			->with(array('type' => function($type){
				$type->with('slugs');
			}))
			->find($data['principal']);
			$article = $article->where('id','!=',$principal->id);
		}
		$article = $article
		->where(function($query) use ($data){
			foreach($data['art'] as $a)
			{
				if(Input::has('principal') && $data['principal'] != $a)
				{
					$query = $query->orWhere('id','=',$a);
				}
			}
			
		})->orderBy('id','DESC')->get();

		$boletinSlug = str_replace(' ','-',strtolower("boletin ".date('d-m-Y H:m:s')."-".$data['name']));
		$library = LibraryFile::where('slug','=',$boletinSlug)->first();
		if (empty($library)) {
			$library 					= new LibraryFile;
			$library->title 			= "Boletin ".date('d-m-Y H:m:s')." ".$data['name'];
			$library->slug              = str_replace(' ','-',strtolower($library->title));
			$library->autor 		    = "fundaepekeina.org";
		}
		$library->type 				= 'boletin';
		$library->publication_date  = date('d-m-Y H:m:s',time());
		$library->save();
		define('BUDGETS_DIR', storage_path().'/biblioteca/'); // I define this in a constants.php file

		if (!is_dir(BUDGETS_DIR)){
			mkdir(BUDGETS_DIR, 0755, true);
		}
		$ruta = storage_path().'/biblioteca/';
		$time = time();
		$miPdf = $time.'.pdf';
		while (file_exists($ruta.'/'.$miPdf)) {
			$time = time();
			$miPdf = $time.'.pdf';
		}
		$library->file              = $miPdf;
		$library->save();

		$outputName = $library->file;
		$html    = View::make('emails.boletin-pdf')->with('article',$article)->with('principal',$principal)->with('name',$data['name']);		
		$pdfPath = BUDGETS_DIR.'/'.$outputName;
		File::put($pdfPath, PDF::load($html, 'A4', 'portrait')->output());
		$boletin = View::make('emails.boletin')->with('article',$article)->with('principal',$principal)->with('name',$data['name']);		
		return View::make('admin.generate')
		->with('title','Generar Boletin')
		->with('html',$boletin);
	}
	public function selectNews()
	{
		$title = "Crear Boletin | fundaepekeina.org";
		$article = Articulo::with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->where('state','=',1)
		->orderBy('id','DESC')
		->get();
		return View::make('admin.boletin')
		->with('article',$article)
		->with('title',$title);
	}
	public function getTest()
	{
		$principal = Articulo::with('imagenes')->orderBy('created_at','DESC')->first();
		$article = Articulo::with('imagenes')->orderBy('created_at','DESC')->take(6)->get();
		$hist = Articulo::where('tipo','=',3)
		->orderBy('id','DESC')
		->with('subtitle')
		->with('imagenes')
		->first();
		$colors  = array('yellow','green','pink','blue');
		return View::make('emails.boletin')
		->with('article',$article)
		->with('principal',$principal)
		->with('title','Generar Boletin')
		->with('colors',$colors)
		->with('hist',$hist);
	}
	public function deleteFromBoletin()
	{
		$title = "Dar de baja Boletin | fundaepekeina";
		return View::make('boletin.baja')
		->with('title',$title);
	}
	public function getLastBoletin()
	{
		return View::make('boletin.06042017');
	}
}
