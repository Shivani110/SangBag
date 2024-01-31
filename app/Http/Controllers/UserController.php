<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function login(){
        return view('frontend.login');
    }

    public function register(){
        return view('frontend.applynow');
    }

    public function applynow(Request $request){
        $password = $request->password;

        if(Auth::attempt(['email' => 'admin@gmail.com','password' => $password])){
            $role = Auth::user()->user_type;
            if($role == '1'){
                return redirect('index');
            }else{
                Auth::logout();
                return back()->with("error","login falied !!");
            }
        }else{
            return back()->with("error","The credentials is not matched");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
