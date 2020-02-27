<?php

namespace App\Http\Controllers\Member;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\CheckUser;
use App\Cart;
use App\product;
use App\Orders;
use App\Order_detail;

use Session;

class MemberController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('member/dashboard_member');	
    }
    public function profile()
    {
    	return view('member/profile');	
    }
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        Session::flash("success","Data Anda telah dihapus");
        return redirect('/member/cart');
    }
    public function tambahcart(Request $request)
    {
         $harga = product::find($request->product);
		 $cart = Cart::where([['product_id',$request->product],['user_id',Auth::id()]])->count();
		 if ($cart == 1) 
         {
    		 $keranjang = Cart::where([['product_id',$request->product],['user_id',Auth::id()]])->first();
    		 $qty=$keranjang->qty+1;
    		 $keranjang->qty=$qty;
    		 $keranjang->subtotal= $keranjang->product->harga*$keranjang->qty;
    		 $keranjang->save();
    		 //Session::flash('success','Jumlah barang berhasil di tambah');
		 } 
         else
         {
             
    		 $cart = new Cart;
    		 $cart->user_id=Auth::id();
             $cart->product_id=$request->product;
    		 $cart->qty=1;
    		 $cart->subtotal=$harga->harga;
    		 $cart->save();
    		 //::flash('success','Item Berhasil di tambahkan');
		 }
         return response()->json([
            'status' => 1,
            'product' => $harga->nama_brg
         ]);
    }
    public function cart()
    {
    	// //select* where id
    	// $carts = DB::table('carts')
     //        ->join('users', 'users.id', '=', 'carts.user_id')
     //        ->join('products', 'products.id', '=', 'carts.product_id')
     //        ->select('carts.*', 'users.name', 'products.nama_brg','products.gambar','products.harga')
     //        ->where('user_id',Auth::id())
     //        ->get();
    	 $keranjang=Cart::where('user_id',Auth::id())->get();
         $jumlah=Cart::where('user_id',Auth::id())->sum('subtotal');
	     return view('member/cart',compact('keranjang','jumlah'));
    }
    public function order()
    {
    	$keranjang=Cart::where('user_id',Auth::id())->get();
    	return view('member/order',compact('keranjang'));	
    }
    public function store(Request $request)
    //untuk menerima inputan menggunakan parameter request
    {
        $order = new Orders;
        //memangil apa aja yang akan di kirimkan ke database   
		$order->user_id=Auth::id();
        $order->nama_penerima=$request->nama_penerima;
        $order->alamat=$request->alamat;
        $order->no_penerima=$request->no_penerima;
        $order->ongkir=$request->ongkir;
        $order->total=0;
        $order->status='pending';
        $order->save();

        $carts = Cart::where('user_id',Auth::id())->get();
        foreach ($carts as $cart ) {
    		$detail = new Order_detail;
    		$detail->user_id=Auth::id();
    		$detail->order_id=$order->id;
    		$detail->product_id=$cart->product_id;
    		$detail->qty=$cart->qty;
    		$detail->subtotal=$cart->subtotal;
    		$detail->save();
    	}
    	$total =Order_detail::where('order_id',$order->id)->sum('subtotal');
    	$order->total=$total+$order->ongkir;
    	$order->save();

    	Cart::where('user_id',Auth::id())->delete();
        Session::flash("success","Data Anda telah tersimpan");
        return redirect('/member/order/sukses');
    }
    public function sukses()
    {
    	$data = Order_detail::where('user_id',Auth::id())->get();
    	return view('/member/sukses',['data'=>$data]);
    }


}
