<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable=[
	'customer_id',
	'category',
	'description',
	'acquired_value',
	'acquired_date',
	'recent_value',
	'recent_date',
	];

	public function customer() {
		return $this->belongsTo('App\Customer');
	}
}
