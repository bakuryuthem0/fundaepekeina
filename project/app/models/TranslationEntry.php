<?php

class TranslationEntry extends Eloquent{

	public function langs()
	{
		return $this->belongsTo('Language','lang_id');
	}
}
