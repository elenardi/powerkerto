<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        //validation rules
        $rules = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
            ]);

        $validator = User::where('username', '=', $rules['username'])->first();
        if($validator){
            if (Hash::check($rules['password'], $validator->password))
            {
                session(['username' => $request->username]);
                return redirect('/dbadmin');
            }
            else {
                return back();
            }
        }
        else{
            return back();
        }
    }
}
