<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Http\Requests\AddCurrencyRequest;

class CurrenciesController extends Controller
{
    public function showAll()
    {
        $currencies = Currency::all()->toArray();
        
        return view('currencies', ['currencies' => $currencies]);
    }

    public function showParticular($id)
    {
        $currency = Currency::find($id)->toArray();
        
        return view('currency', ['currencies' => [$currency]]);
    }

    public function showAddForm()
    {
        return view('addCurrency');
    }

    public function add(AddCurrencyRequest $request)
    {
        $validData = $request->validated();
        
        $currency = new Currency;

        $currency->title      = $validData['title'];
        $currency->short_name = $validData['short_name'];
        $currency->logo_url   = $validData['logo_url'];
        $currency->price      = $validData['price'];

        $currency->save();

        return redirect()->route('currencies');
    }
    
    public function edit($id)
    {
        return view('layout');
    }

    public function delete($id)
    {
        Currency::find($id)->delete();
        
        return redirect()->route('currencies');
    }
}
