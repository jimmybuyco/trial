<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function addBill(Request $request)
    {
        if ($request->isMethod('post')) {
            $bills = new \App\Bill();
            $bills->account_number = Input::get("accountNo");
            $bills->biller_id = Input::get("billerId");
            $bills->amount = Input::get("amount");
            $bills->status = 1;
            $bills->save();

            $args = DB::table('bills')
                ->leftJoin('billers', 'bills.biller_id', '=', 'billers.id')
                ->leftJoin('categories', 'billers.category_id', '=', 'categories.id')
                ->select('account_number', 'amount', 'billers.name AS billersName', 'categories.name AS categoriesName')
                ->get();

            return response()->json($args);
        } else {
            $args = [
                'allBills' => DB::table('bills')
                    ->leftJoin('billers', 'bills.biller_id', '=', 'billers.id')
                    ->leftJoin('categories', 'billers.category_id', '=', 'categories.id')
                    ->select('account_number', 'amount', 'billers.name AS billersName', 'categories.name AS categoriesName')
                    ->get()
            ];

            return view('blades.default.add-bill', $args);
        }
    }
}