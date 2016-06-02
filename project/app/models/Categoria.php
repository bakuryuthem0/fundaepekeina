<?php

class Categoria extends Eloquent{

	public function articulos()
	{
		return $this->hasMany('Articulo','cat_id')->with('imagenes');
	}
	public function tipos()
	{
		return $this->belongsTo('Tipo','tipo');
	}
	/*public function artCount()
	{
	  return $this->articulos()
	    ->selectRaw('cat_id,count(*) as aggregate')
	    ->groupBy('cat_id');
	}*/
}
