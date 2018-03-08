<?php

class Campaing extends Eloquent{
	public function titles()
	{
		return $this->hasMany('TranslationEntry','translation_id','title');
	}
}