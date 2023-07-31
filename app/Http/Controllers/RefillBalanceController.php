<?php

namespace App\Http\Controllers;

use App\Models\Requisite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RefillBalanceController extends Controller
{
    public function show()
    {
        $requisites = Requisite::query()->where('status','=','1')->get();

        $user = User::query()->find(Auth::id());

        return view('refillBalance',['requisites' => $requisites,'user' => $user]);
    }
}
