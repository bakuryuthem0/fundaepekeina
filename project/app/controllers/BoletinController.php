<?php

class BoletinController extends BaseController {

	public function getBoletinAdmin()
	{
		$data = Input::all();
		$principal = "";
		if (Input::has('principal')) {
			$principal = Articulo::with('imagenes')->find($data['principal']);
		}
		$article = Articulo::with('imagenes');
		foreach($data['art'] as $a)
		{
			$article = $article->orWhere('id','=',$a);
		}
		$article = $article->orderBy('id','DESC')->get();
		$colors  = array('yellow','green','pink','blue');
		$hist = Articulo::where('tipo','=',3)
		->orderBy('id','DESC')
		->with('subtitle')
		->with('imagenes')
		->first();		
		return View::make('admin.generate')
		->with('article',$article)
		->with('title','Generar Boletin')
		->with('principal',$principal)
		->with('colors',$colors)
		->with('hist',$hist);
	}
	public function selectNews()
	{
		$title = "Crear Boletin | fundaepekeina.org";
		$article = Articulo::with('imagenes')->where('state','=',1)->orderBy('id','DESC')->get();
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
	public function get7years()
	{
		return View::make('boletin.922016');
	}
}
