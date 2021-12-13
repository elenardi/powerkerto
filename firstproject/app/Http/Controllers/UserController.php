<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class UserController extends Controller
{
    public function login(Request $request)
    {
        //validation rules
        $rules = array(
            'username' => 'required',
            'password' => 'required|min:8'
        );

        $validator = User::where('username', '=', $rules['username'])->first();
        if($validator){
            if (($request->password == $validator->password))
            {
                session(['username' => $request->username]);
                return redirect('dashboard');
            }
            else {
                //return back()->withInput()->with('pesan',"Login Gagal");
            }
        }
        else{
            //return back()->withInput()->with('pesan',"Login Gagal");
        }
    }

    public function logout(){
        session()->forget('username');
        //return redirect('adminlte/login')->with('pesan','Logout berhasil');
    }
}
