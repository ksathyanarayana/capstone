<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable=[
	'customer_id',
	'symbol',
	'share_name',
	'shares',
	'purchase_price',
	'purchased',

	];
	
	public function customer() {
		return $this->belongsTo('App\Customer');
	}
}
