<?php

class BoletinController extends BaseController {

	public function getBoletin()
	{
		$article = Articulo::orderBy('created_at','DESC')->take(10)->get();
		return View::make('emails.boletin')
		->with('article',$article);
	}
}
