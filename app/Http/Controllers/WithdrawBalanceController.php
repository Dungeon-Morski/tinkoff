<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawBalanceController extends Controller
{
    public function show()
    {
        $methods = WithdrawMethod::all();
        $user = User::find(Auth::id());
        return view('withdrawBalance',['methods' => $methods,'user' => $user]);
    }

    public function withdraw(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'summ' => 'required'
        ]);
        if (is_null($request->type)) {
            toastr()->error('Не выбран метод','Ошибка');
            return redirect()->route('invoice');
        }
        $user = User::query()->find(Auth::id());
        if ($request->summ > $user->balance) {

            toastr()->error('Сумма вывода превышает баланс','Ошибка');
            return redirect()->back();
        }
        $user->balance-= $request->summ;
        $user->save();
        toastr()->success('Заявка на вывод создана','Успех!');
        return redirect()->route('invoice');


    }
}
