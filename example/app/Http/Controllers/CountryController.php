<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;
use App\Models\Country;

class CountryController extends Controller
{
    public function save_country(CountryRequest $request) {
        $country = new Country();
        $country->name = $request->input('name');
        $country->population = $request->input('population');

        $country->save();

        return redirect()->route('country_list')->with('success', 'Country was successfully added!');
    }

    public function country_list() {
        return view('country_list', ['countries' => Country::all()]);
    }
}
