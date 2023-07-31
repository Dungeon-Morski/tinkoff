<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function show()
    {
       $user = User::query()->find(auth()->user()->id);

        return view('settings',['user' => $user]);
    }

        public function UpdateProfile(Request $request)
    {
//        $request->validate([
//            'name' => 'required|min:3',
//            'surname' => 'required|min:3',
//            'phone' => 'required|min:7'
//        ]);
            if (!is_null($request->name)) {
               $data['name'] = $request->name;
            }
            if (!is_null($request->surname)) {
                $data['surname'] = $request->surname;
            }
            if (!is_null($request->phone)) {
                $data['phone'] = $request->phone;
            }
         User::query()->where('id',Auth::id())->update($data);

        toastr()->success('Данные о профиле обновлены!','Успех!');
        return redirect()->back();
    }

}
