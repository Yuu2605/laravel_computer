<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function submitLogin(Request $request)
    {
        $username = $request->input('email');
        $password =$request->input('password');

        if (Auth::attempt([
            'username'=>"$username",
            'password'=>"$password"
        ])) {
            return redirect()->route('dashboard');
        } else {
            return back()->WithError('Tên tài khoản mật khẩu không đúng');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
