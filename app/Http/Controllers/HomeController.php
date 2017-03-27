<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\App;

class HomeController extends BaseController
{
    public function home()
    {
        return view('blades.default.login');
    }

    public function addBill(Request $request)
    {
        if ($request->isMethod('post')) {
            dd('POST');
        } else {
            return view('blades.default.addBill');
        }
    }
}