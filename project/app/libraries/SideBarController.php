<?php
	Class SideBarController{
		public static function getMostViewed($id = null)
		{
			$articles = Visitor::groupBy('article_id')
			->take(3)
			->orderBy('top_articles','DESC')
			->with(array('article' => function($article){
				$article->with('likesCount')
				->with('visitsCount')
				->with('slugs')
				->with('titles');
			}))
			->selectRaw('count(article_id) as top_articles, article_id')->get();
			return $articles;
		}
		public static function getMostPopulars($id = null)
		{
			$articles = Like::groupBy('articulo_id')
			->take(3)
			->orderBy('top_articles','DESC')
			->with(array('article' => function($article){
				$article->with('likesCount')
				->with('visitsCount')
				->with('slugs')
				->with('titles')->with('descriptions');
			}))
			->selectRaw('count(articulo_id) as top_articles, articulo_id')->get();
			return $articles;
		}
	}