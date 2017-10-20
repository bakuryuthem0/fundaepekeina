<?php
	Class SideBarController{
		public static function getCategories($menu)
		{
		    if ($menu != "all") {
				$cat = Categoria::with(array('tipos' => function($tipos){
					$tipos->with('slugs')
					->with('descriptions');
				}))->where('tipo','=',$menu)->get();
		    }else
		    {
				$cat = Categoria::with(array('tipos' => function($tipos){
					$tipos->with('slugs')
					->with('descriptions');
				}))->get();
		    }
			return $cat;
		}
	}