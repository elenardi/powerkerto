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
                if ($validator->role == 'admin')
                {
                    return redirect('/dbadmin');
                }
                elseif($validator->role == 'adv')
                {
                    return redirect('/dbadv');
                }
                else
                {
                    return redirect('/dbcs');
                }
            }
            else {
                return back();
            }
        }
        else{
            return back();
        }
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/');
    }
}
