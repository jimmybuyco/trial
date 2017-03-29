<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
    public function addBiller(Request $request){
        if ($request->isMethod('post')) {
            $biller = new \App\Biller();
            $biller->name = Input::get("name");
            $biller->description = Input::get("desc");
            $biller->category = Input::get("cat");
            $biller->save();

            return $biller = array(
                'name'=>Input::get("name"),
                'id'=>$biller->id,
                'description'=>Input::get("desc"),
                'category' => Input::get("cat")
            );
        } else {
            return view('blades.default.add-biller');
        }
    }
}