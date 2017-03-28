<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillerController extends Controller
{
    public function getAllCategory()
    {
        return response()->json(\App\Category::get());
    }

    public function getAllBiller()
    {
        return response()->json(\App\Bill::get());
    }
}