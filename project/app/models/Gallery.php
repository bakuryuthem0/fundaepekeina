<?php

class Gallery extends Eloquent{
	public function imagenes()
	{
		return $this->hasMany('GalleryImage','gallery_id');
	}
	public function imgCount()
	{
	  return $this->imagenes()
	    ->selectRaw('gallery_id,count(*) as aggregate')
	    ->groupBy('gallery_id');
	}
}
