<?php

class BoletinController extends BaseController {
	public function getBoletinAdmin()
	{
		$data = Input::all();
		$principal = "";
		if (Input::has('principal')) {
			$principal = Articulo::with('imagenes')->with('slugs')
			->with('titles')
			->with('descriptions')
			->find($data['principal']);
		}
		$article = Articulo::with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions');
		foreach($data['art'] as $a)
		{
			$article = $article->orWhere('id','=',$a);
		}
		$article = $article->orderBy('id','DESC')->get();
		$colors  = array('yellow','green','pink','blue');
		$hist = Articulo::where('tipo','=',6)
		->orderBy('id','DESC')
		->with(array('subtitle'=>function($subtitle){
			$subtitle->with('titles');
		}))
		->with('imagenes')
		->with('slugs')
		->with('titles')
		->with('descriptions')
		->first();		
		$library = LibraryFile::where('slug','=',str_replace(' ','-',strtolower("Boletin ".date('d-m-Y'))))->first();
		if (empty($library)) {
			$library 					= new LibraryFile;
			$library->slug              = str_replace(' ','-',strtolower($library->title));
		}
		$library->title 			= "Boletin ".date('d-m-Y');
		$library->type 				= 'boletin';
		$library->publication_date  = date('d-m-Y',time());
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
		$html    = View::make('emails.boletin-pdf')->with('article',$article)->with('principal',$principal)->with('colors',$colors)->with('hist',$hist);		
		$pdfPath = BUDGETS_DIR.'/'.$outputName;
		File::put($pdfPath, PDF::load($html, 'A4', 'portrait')->output());
		
		$boletin = View::make('emails.boletin')->with('article',$article)->with('principal',$principal)->with('colors',$colors)->with('hist',$hist);		
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
		$article = Articulo::with('imagenes')->orderBy('created_at','DESC')->take(6)->get();
		$hist = Articulo::where('tipo','=',3)
		->orderBy('id','DESC')
		->with('subtitle')
		->with('imagenes')
		->first();
		$colors  = array('yellow','green','pink','blue');
		return View::make('emails.boletin')
		->with('article',$article)
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
