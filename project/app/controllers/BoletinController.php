<?php

class BoletinController extends BaseController {

	public function getBoletin()
	{
		$article = Articulo::with('imagenes')->orderBy('created_at','DESC')->take(6)->get();
		return View::make('emails.boletin')
		->with('article',$article);
	}
	public function getBoletinAdmin()
	{
		$article = Articulo::with('imagenes')->orderBy('created_at','DESC')->take(6)->get();
		return View::make('admin.generate')
		->with('article',$article)
		->with('title','Generar Boletin');
	}
}
