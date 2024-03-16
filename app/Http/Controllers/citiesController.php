<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cities;

class citiesController extends Controller
{
    public function index()
    {
        $cities = cities::all();
        return view('cities.index', compact('cities'));
    }
}
