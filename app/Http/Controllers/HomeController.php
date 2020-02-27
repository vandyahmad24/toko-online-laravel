<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CheckUser;
use App\Cart;

class HomeController extends Controller
{
    // *
    //  * Create a new controller instance.
    //  *
    //  * @return void
     
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getcart()
    {
        $keranjang=Cart::where('user_id',Auth::id())->get(); 
        $jumlah=Cart::where('user_id',Auth::id())->sum('subtotal');   
        return view('/coba',compact('keranjang','jumlah'));
    }
  
    
}
