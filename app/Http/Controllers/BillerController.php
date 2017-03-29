<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//----- MODELS ----->>
use App\Bill;
use App\Biller;
use App\Category;

class BillerController extends Controller
{
    public $billModel;
    public $billerModel;
    public $categoryModel;

    public function __construct()
    {
        $this->billModel = new Bill();
        $this->billerModel = new Biller();
        $this->categoryModel = new Category();
    }

    public function getAllBiller()
    {
        return response()->json($this->billerModel->getAllBiller());
    }

    public function getSingleBiller($catId)
    {
        return response()->json(\App\Biller::where('category_id', $catId)->get());
    }

    public function addBiller(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->billerModel->name = Input::get("name");
            $this->billerModel->description = Input::get("description");
            $this->billerModel->category_id = Input::get("category_id");
            $this->billerModel->save();

            return $this->getAllBiller();
        } else {
            return view('blades.default.add-biller');
        }
    }
}