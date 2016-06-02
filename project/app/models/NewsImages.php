<?php

class NewsImages extends Eloquent{
	protected $table = "news_images";

	public function articulos()
    {
        return $this->belongsTo('Articulo','articulo_id');
    }
}
