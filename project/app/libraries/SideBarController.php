<?php
	Class SideBarController{
		public static function getCategories($menu)
		{
		    if ($menu != "all") {
				$cat = Categoria::with('tipos')->where('tipo','=',$menu)->get();
		    }else
		    {
				$cat = Categoria::with('tipos')->get();
		    }
			return $cat;
		}
	}