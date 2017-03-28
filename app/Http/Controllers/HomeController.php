<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function addBill()
    {
        return view('blades.default.add-bill');
    }
}