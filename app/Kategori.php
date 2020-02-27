<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	public function product()
	{
		//saya memiliki banyak anggota di 
	    return $this->hasMany("App\Product");
	}

}
