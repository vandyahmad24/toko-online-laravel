<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    public function order()
    {
    	return $this->belongsTo('App\Orders');
    } 
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function product()
    {
    	return $this->belongsTo('App\product');
    }
}
