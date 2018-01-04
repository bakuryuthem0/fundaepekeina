<?php

class Account extends Eloquent{
	public function donations()
	{
		return $this->hasMany('Donation','donation_id');
	}
	public function fillData($data)
	{
		$this->name			= $data['name']; 
		$this->number		= $data['number']; 
		$this->type			= $data['type']; 
		$this->bank			= $data['bank']; 
		$this->social_name	= $data['social_name']; 
		$this->rif			= $data['rif']; 
	}
}