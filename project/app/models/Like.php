<?php

class Like extends Eloquent{
	public function article()
	{
		return $this->belongsTo('Articulo','articulo_id');
	}
}
