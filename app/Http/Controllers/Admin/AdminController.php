<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CheckAdmin;
use App\Kategori;
use Auth;
use Session;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('admin/dashboard_admin');
    }
    public function showkategori()
    {   
    	
    	return view('admin/kategori/v_kategori');      
    }
    public function loadkategori()
    {   
        $lihat_data =Kategori::orderBy('id','desc')->paginate(10);
        return view('admin/kategori/t_kategori',['lihat_data'=>$lihat_data]);      
    }
    public function create_kategori()
    {
        return view('admin/kategori/c_kategori');
    }
    public function store(Request $request)
    //untuk menerima inputan menggunakan parameter request
    {
        $kategori = new Kategori;
    	$this->validate($request,[
    		'nama_ktg' => 'required|string|max:30'
    	]);
        //memangil apa aja yang akan di kirimkan ke database
        $kategori->nama_ktg=$request->nama_ktg;
        $kategori->save();
        Session::flash("success","Data Anda telah tersimpan");
        return response()->json([
            'nama' => $kategori->nama_ktg
         ]);
        
    }
    public function destroy($id)
    {
        $nama = Kategori::find($id);
        $data = Kategori::find($id)->delete();
        Session::flash("success","Data Anda telah dihapus");
        return response()->json([
            'status' =>1,
            'nama' => $nama->nama_ktg
         ]);
    }
    public function edit($id){
        $data = Kategori::find($id);
        return view('admin/kategori/',compact('data'));   
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_ktg' => 'required|string|max:30'
        ]);
        $data = Kategori::find($id);
        $data->nama_ktg=$request->nama_ktg;
        $data->save();
        Session::flash("success","Data Anda telah teredit");
        return response()->json([
            'nama' => $data->nama_ktg
         ]);
      
    }    
}