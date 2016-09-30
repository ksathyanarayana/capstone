<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    protected $fillable=[
	'customer_id',
	'fund_name',
	'fund_description',
	'acquired_value',
	'acquired_date',
	'recent_value',
	'recent_date',
	];

	public function customer() {
		return $this->belongsTo('App\Customer');
	}
}
