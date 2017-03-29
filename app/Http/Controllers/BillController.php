<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//----- MODELS ----->>
use App\Bill;
use App\Biller;
use App\Category;

class BillController extends Controller
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

    public function getAllBill()
    {
        return response()->json($this->billModel->getAllBills());
    }

    public function addBill(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->billModel->account_number = Input::get("accountNo");
            $this->billModel->biller_id = Input::get("billerId");
            $this->billModel->amount = Input::get("amount");
            $this->billModel->status = 1;
            $this->billModel->save();

            return $this->getAllBill();
        } else {
            return view('blades.default.add-bill');
        }
    }
}