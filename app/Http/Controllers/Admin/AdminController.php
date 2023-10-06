<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Hash;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect("admin/dashboard");
            }else{
                return redirect()->back()->with("error_message", "Invalid Password or E-mail");
            }
        }
        return view('admin.login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function updatePassword(){
        return view('admin.update_password');
    }

    public function checkCurrentPassword(Request $request){
        $data = $request->all();
        if(Hash::check($data['current_pwd'],Auth::guard('admin')->user()->password)){
            return "true";
        }else{
            return "false";
        }
    }
} 
