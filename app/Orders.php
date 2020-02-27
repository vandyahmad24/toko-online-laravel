<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function order_detail()
    {
    	return $this->hasMany("App\Order_detail");
    }
    public function user()
    {
    	return $this->belongsTo("App\User");
    }
}
