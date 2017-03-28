<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;



class CategoryController extends Controller
{

    public function addCatergory(Request $request){
        if ($request->isMethod('post')) {
            $category = new \App\Category();
            $category->name = Input::get("name");
            $category->description = Input::get("desc");
            $category->save();

            return $category = array(
                'name'=>Input::get("name"),
                'id'=>$category->id,
                'description'=>Input::get("desc"),
            );
        } else {
            return view('blades.default.add-category');
        }
    }

    public function getAllCategory()
    {
        return response()->json(\App\Category::get());
    }
}
