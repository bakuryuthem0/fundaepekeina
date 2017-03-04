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
	public function categorias()
	{
		return $this->belongsTo('Categoria','cat_id');
	}
	public function likeCount()
	{
	  return $this->likes()
	    ->selectRaw('articulo_id,count(*) as aggregate')
	    ->groupBy('articulo_id');
	}
	public function subtitle()
	{
		return $this->hasOne('Subtitle','articulo_id');
	}
}
