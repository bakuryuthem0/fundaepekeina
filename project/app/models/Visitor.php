<?php

class Visitor extends Eloquent {
	public function article()
	{
		return $this->belongsTo('Articulo','article_id');
	}
}