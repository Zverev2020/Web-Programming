<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $user = User::where([['login', $request->login], ['password', md5($request->password)]])->first();
    if (is_null($user)){
        return "Неверный логин или пароль";
    }
    Auth::login($user);
        return back()->withInput();

        }
    public function registration(Request $request)
    {

        $user = User::create([
            'login' => $request->login,
            'email_address' => $request->email_address,
            'password' => md5($request->password),
            'status' => 1,
    ]);
        if (is_null($user)){
            return "Ошибка";
        }
        return "Регистрация успешна";
    }
    public function logout()
    {
         Auth::logout();
        return back()->withInput();
    }
}




