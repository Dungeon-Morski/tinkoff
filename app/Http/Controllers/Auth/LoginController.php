<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function show(): View
    {
        return view('auth.login');
    }

    public  function login (Request $request) {

            $validator = Validator::make($request->all(), [
                'login' => 'required|min:3|max:20',
                'password' => 'required|min:3|max:20',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if (!Auth::attempt($request->only(['login','password']))) {
                return redirect()->back()->withErrors(['login' => 'Аккаунт не найден'])->withInput();
            }

            return redirect(route('invoice'));

    }

    public function username()
    {
        return 'login';
    }
}
