<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Config;


class PageController extends Controller
{
    public function index()
    {
    	$config =Config::all();
    	$data   =product::paginate(4);
    	return view('front/index',compact('data','config'));	
    }
}
