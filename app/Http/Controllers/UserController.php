<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function adminsignin(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email,'password' => $password])){
            $role = Auth::user()->user_type;
            if($role == '1'){
                return redirect('adminindex');
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
        return redirect('/admin-login');
    }
}
