<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CheckAdmin;
use App\User;
use Auth;
use Session;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        public function showuser()
    {   
        $lihat_data = User::paginate(10);
        return view('admin/user/v_user',['lihat_data'=>$lihat_data]);
    }
   	public function create_user()
    {
        return view('admin/user/c_user');
    }
    public function store(Request $request)
    //untuk menerima inputan menggunakan parameter request
    {
    	$this->validate($request,[
             'name' 	 => 'required|string|max:255',
             'email'	 => 'required|string|email|max:255|unique:users',
             'password'  => 'required|string|min:8|confirmed',
             'level'	 => 'required'

        ]);

        $user = new User;
        //memangil apa aja yang akan di kirimkan ke database
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->level=$request->level;
        $user->save();
        Session::flash("success","Data Anda telah tersimpan");
        return redirect('/dashboard/user');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash("success","Data Anda telah dihapus");
        return redirect('/dashboard/user');

    }
    public function edit($id){
        $user = User::find($id);
        return view('admin/user/u_user',compact('user'));  
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' 	 => 'required', 'string', 'max:255',
             'email'	 => 'required', 'string', 'email', 'max:255', 'unique:users',
             'password'  => 'required', 'string', 'min:8', 'confirmed',
             'level'	 => 'required'
        ]);

        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->level=$request->level;
        $user->save();
        Session::flash("success","Data Anda telah teredit");
        return redirect('/dashboard/user');
    } 
    
}
