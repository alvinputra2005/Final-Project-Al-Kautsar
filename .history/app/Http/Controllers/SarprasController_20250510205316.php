<?php

namespace App\Http\SarprasController;

use Illuminate\Http\Request;

class SarpraController extends Controller
{
    public function index()
    {
        return view('sarpras');
    }
}
