<?php

class Tipo extends Eloquent{
	public function slugs()
	{
		return $this->hasMany('TranslationEntry','translation_id','slug')
		->where('lang_id','=',LangController::getActiveLang()->id);
	}
	public function descriptions()
	{
		return $this->hasMany('TranslationEntry','translation_id','descripcion')
		->where('lang_id','=',LangController::getActiveLang()->id);
	}
}
