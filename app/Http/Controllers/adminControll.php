<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Session;

class adminControll extends Controller
{
    public function dashboard(){
        return view ('dashboard');
    }
    public function adminlogin()
    {
        return view('adminLogin');
    }
    public function adminloged(Request $request)
    {
        $admin = admin::where('username', $request->username)->where('password', $request->password)->get()->toArray();
        if($admin)
        {
            $request->session()->put('admin_session',$admin[0]['id']);
            return redirect('/dashboard');
        }
        else
        {
            session::flash('coc','Email or Password not matched ');
            return redirect('/loginpage')->withInput();
        }
    }
}
