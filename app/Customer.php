<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
	'name',
	'address',
	'cust_number',
	'city',
	'state',
	'zip',
	'email',
	'home_phone',
	'cell_phone',
	];
	
	public function stocks() {
		return $this->hasMany('App\Stock');

	}
	public function investments()
	{
		return $this->hasMany('App\Investment');

	}
	public function funds()
	{
		return $this->hasMany('App\Fund');

	}

}
