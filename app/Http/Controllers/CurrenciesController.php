<?php

namespace App\Http\Controllers;

use App\Currency;

class CurrenciesController extends Controller
{
    public function showAll()
    {
        $currencies = Currency::all()->toArray();
        
        return view('currencies', ['currencies' => $currencies]);
    }

    public function showParticular($id)
    {
        return view('layout');
    }

    public function edit($id)
    {
        return view('layout');
    }
}
