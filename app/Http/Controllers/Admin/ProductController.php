<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CheckAdmin;
use App\product;
use App\kategori;
use Auth;
use Session;

class ProductController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
        public function showbarang()
    {   
        $lihat_data =product::paginate(10);
        return view('admin/barang/v_barang',['lihat_data'=>$lihat_data]);
    }
    public function create_barang()
    {
        $kategori = kategori::all();
        return view('admin/barang/c_barang',compact('kategori'));
    }
    public function store(Request $request)
    //untuk menerima inputan menggunakan parameter request
    {
        //dd($request->all());
        $this->validate($request,[
            'nama_brg'  => 'required|string|max:30',
            'deskripsi' => 'required|string|',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga'     => 'required|numeric',
            'stok'      => 'required|numeric',

        ]);

        $product = new product;
        //memangil apa aja yang akan di kirimkan ke database
        $product->nama_brg=$request->nama_brg;
        $product->deskripsi=$request->deskripsi;
        $product->gambar=$request->gambar;
        $product->harga=$request->harga;
        $product->stok=$request->stok;
        $product->kategori_id=$request->kategori_id;   
        $product->save();
        if($request->hasfile('gambar')){
            $request->file('gambar')->move('product/',$request->file('gambar')->getClientOriginalName());
            $product->gambar = $request->file('gambar')->getClientOriginalName();   
            $product->save();
        }

        Session::flash("success","Data Anda telah tersimpan");
        return redirect('/dashboard/barang');
    }
    
    public function destroy($id)
	{
    	$data = product::find($id);
        $data->delete();
        Session::flash("success","Data Anda telah dihapus");
        return redirect('/dashboard/barang');
	}
    public function edit($id){
        $product = product::find($id);
        return view('admin/barang/u_barang',compact('product'));   
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_brg'  => 'required|string|max:30',
            'deskripsi' => 'required|string|',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga'     => 'required|numeric',
            'stok'      => 'required|numeric',
        ]);
        $product = product::find($id);
        $product->nama_brg=$request->nama_brg;
        $product->deskripsi=$request->deskripsi;
        $product->gambar=$request->gambar;
        $product->harga=$request->harga;
        $product->stok=$request->stok;
        $product->save();
        if($request->hasfile('gambar')){
            $request->file('gambar')->move('product/',$request->file('gambar')->getClientOriginalName());
            $product->gambar = $request->file('gambar')->getClientOriginalName();   
            $product->save();
        }
        Session::flash("success","Data Anda telah teredit");
        return redirect('/dashboard/barang');
    }
    

}