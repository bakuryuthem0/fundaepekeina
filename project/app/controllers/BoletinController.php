<?php

class BoletinController extends BaseController {

	public function getBoletinAdmin()
	{
		$data = Input::all();
		$principal = Articulo::with('imagenes')->find($data['principal']);
		$article = Articulo::with('imagenes');
		foreach($data['art'] as $a)
		{
			$article = $article->orWhere('id','=',$a);
		}
		return View::make('admin.generate')
		->with('article',$article->orderBy('id','DESC')->get())
		->with('title','Generar Boletin')
		->with('principal',$principal);
	}
	public function selectNews()
	{
		$title = "Crear Boletin | fundaepekeina.org";
		$article = Articulo::with('imagenes')->where('state','=',1)->orderBy('id','DESC')->get();
		return View::make('admin.boletin')
		->with('article',$article)
		->with('title',$title);
	}
	/*public function getBoletinAdmin()
	{
		$article = Articulo::with('imagenes')->orderBy('created_at','DESC')->take(6)->get();
		return View::make('admin.generate')
		->with('article',$article)
		->with('title','Generar Boletin');
	}*/
}
