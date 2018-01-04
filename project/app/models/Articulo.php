<?php

class Articulo extends Eloquent{
	public function imagenes()
	{
		return $this->hasMany('NewsImages');
	}
	public function likes()
	{
		return $this->hasMany('Like','articulo_id');
	}
	public function likesCount()
	{
	  return $this->likes()
	    ->selectRaw('articulo_id,count(*) as aggregate')
	    ->groupBy('articulo_id');
	}
	public function visits()
	{
		return $this->hasMany('Visitor','article_id');
	}
	public function visitsCount()
	{
	  return $this->visits()
	    ->selectRaw('article_id,count(*) as aggregate')
	    ->groupBy('article_id');
	}
	public function categorias()
	{
		return $this->belongsTo('Categoria','cat_id');
	}
	public function subtitle()
	{
		return $this->hasOne('Subtitle','articulo_id');
	}
	public function type()
	{
		return $this->belongsTo('Tipo','tipo');
	}
	public function slugs()
	{
		return $this->hasMany('TranslationEntry','translation_id','slug')
		->where('lang_id','=',LangController::getActiveLang()->id);
	}
	public function titles()
	{
		return $this->hasMany('TranslationEntry','translation_id','title')
		->where('lang_id','=',LangController::getActiveLang()->id);
	}
	public function descriptions()
	{
		return $this->hasMany('TranslationEntry','translation_id','descripcion')
		->where('lang_id','=',LangController::getActiveLang()->id);
	}
	public function slugsAll()
	{
		return $this->hasMany('TranslationEntry','translation_id','slug');
	}
	public function titlesAll()
	{
		return $this->hasMany('TranslationEntry','translation_id','title');
	}
	public function descriptionsAll()
	{
		return $this->hasMany('TranslationEntry','translation_id','descripcion');
	}
}
