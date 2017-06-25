<?php

class GalleryImage extends Eloquent{
	protected $table = "gallery_images";
	public function imagenes()
	{
		return $this->belongsTo('Gallery','gallery_id');
	}
}
