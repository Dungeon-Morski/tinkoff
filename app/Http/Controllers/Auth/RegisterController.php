<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }


        public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|max:20',
                'surname' => 'required|min:3|max:20',
                'login' => 'required|unique:users',
                'phone' => 'required|unique:users',
                'password' => 'required|confirmed',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

           $user =  User::query()->create([
                'name' => $request->name,
                'surname' => $request->surname,
                'login' => $request->login,
                'phone' => $request->phone,
                'password' => $request->password,

            ]);

            Auth::login($user);

            return redirect(route('invoice'));


        }
}
