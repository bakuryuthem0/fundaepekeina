<?php

class ProjectController extends BaseController {

	public function getLaguna()
	{
		$title = "Escuela de campo para agricultores la laguna | Fundaepekeina";
		return View::make('home.projects.laguna')
		->with('title',$title)
		->with('active','inicio');
	}
}