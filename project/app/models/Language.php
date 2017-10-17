<?php

class Language extends Eloquent{
	public function names()
	{
		return $this->hasMany('TranslationEntry','translation_id','name');
	}
}
