<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\CheckAdmin;
use App\Order_detail;
use App\Orders;
use Auth;
use Session;

class OrderController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $lihat_data = Orders::paginate(10);
        return view('admin/order/v_order',compact('lihat_data'));
    }
    public function detail($id){
        $data = Orders::find($id);
        $detail =Order_detail::where('order_id',$data->id)->get();
        $total  =Order_detail::where('order_id',$data->id)->sum('subtotal');
        
        return view('admin/order/detail',compact('data','detail','total'));   
    }
    public function status(Request $request, $id){
        $data = Orders::find($id);
        $data->status=$request->status;
        $data->save();
        Session::flash("success","Status telah terganti");
        return redirect('/dashboard/order');  
    }
    
}
