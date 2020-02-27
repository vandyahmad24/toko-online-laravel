<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Template;

use Auth;
use Session;

class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        public function index()
    {   
        $templates = Template::paginate(5);
        return view('admin/template/v_template',compact('templates')); 
    }
	public function select(Request $request, $id)
  	{
      
  		$template = Template::where('selected','1')->update(['selected' => '0']);
  		$template = Template::find($id); 
  		$template->selected='1';
  		$template->save();
  		Session::flash("success","berhasil merubah template"); 
  		return redirect('/dashboard/template')  ;
  	}
}
