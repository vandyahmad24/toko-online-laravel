<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function Cart()
    {
    	return $this->hasMany("App\Cart");
    }
    public function order_detail()
    {
    	return $this->hasMany("App\Order_detail");
    }
    public function kategori()
    {
    	//saya merupakan anak dari model kategori
    	return $this->belongsTo("App\Kategori");
    }
}
