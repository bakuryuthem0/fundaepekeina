<?php

class Donation extends Eloquent{
	public function accounts()
	{
		return $this->belongsto('Account','account_id');
	}
	public function fillData($data)
	{
		$this->fullname			= $data['fullname'];
		$this->account_id		= $data['account'];
		$this->email			= $data['email'];
		$this->transaction_date	= $data['date'];
		$this->amount			= $data['amount'];
		$this->reference_number	= $data['reference_number'];
	}
}
