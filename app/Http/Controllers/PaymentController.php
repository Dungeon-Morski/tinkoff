<?php

namespace App\Http\Controllers;

use App\Models\Requisite;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show(Request $request)
    {
        $requisite = Requisite::query()->find($request->id);

        if ($requisite->min_deposit > $request->amount) {
            toastr()->error('Сумма для данного метода должна быть больше : ' . $requisite->min_deposit,'Ошибка');
            return redirect()->back();
        }

        return view('payment',['requisite' => $requisite,'amount' =>$request->amount,'bank' =>$request->bank]);
    }
}
