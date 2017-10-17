<?php

class Subtitle extends Eloquent{
	public function titles()
	{
		return $this->hasMany('TranslationEntry','translation_id','subtitulo');
	}
}
