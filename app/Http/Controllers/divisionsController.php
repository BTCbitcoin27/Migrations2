<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\divisions;

class divisionsController extends Controller
{
    public function index()
    {
        $divisions = divisions::all();
        return view('divisions.index', compact('divisions'));
    }
}
