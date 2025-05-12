<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SarpraController extends Controller
{
    public function index()
    {
        return view('sarpras');
    }
}
