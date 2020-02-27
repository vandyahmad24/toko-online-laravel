<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CheckAdmin;
use App\Config;
use Auth;
use Session;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $lihat_data = Config::all();
        return view('admin/config/config',compact('lihat_data'));
    }
    public function update(Request $request, $id)
    {
    	$this->validate($request,[
            'nama_toko' => 'required|string|max:30',
            'alamat' => 'required|string|max:50',
            'footer' => 'required|string|max:30',
            'kontak' => 'required|numeric|max:30',
            'instagram' => 'required|string|max:30',
            'no_rek' => 'required|string|max:30',
            'facebook' => 'required|string|max:30'
        ]);
        $data = Config::find($id);
        $data->nama_toko=$request->nama_toko;
        $data->alamat=$request->alamat;
        $data->footer=$request->footer;
        $data->kontak=$request->kontak;
        $data->instagram=$request->instagram;
        $data->no_rek=$request->no_rek;
        $data->facebook=$request->facebook;
        $data->save();
        Session::flash("success","Data Anda telah teredit");
        return redirect('/dashboard/config');
    }   
}
