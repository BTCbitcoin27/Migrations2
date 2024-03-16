<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conferences;

class conferencesController extends Controller
{
    public function index()
    {
        $conferences = conferences::all();
        return view('conferences.index', compact('conferences'));
    }
}
