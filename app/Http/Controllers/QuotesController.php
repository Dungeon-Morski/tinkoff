<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function show()
    {
        return view('quotes');
    }
}
