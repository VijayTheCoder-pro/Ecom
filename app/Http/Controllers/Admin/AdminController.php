<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (Auth::guard('admin')->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
        $request->session()->regenerate();
        return redirect('/admin-index')->with('success','Welcome back super admin');

        }else{
            return redirect('/admin-login')->with('wrong','Invalid email and password ');
        }
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin-login')->with('logout','Logout successfully !');
    }
}
