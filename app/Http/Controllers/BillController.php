<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function getAllBill()
    {
        $data = DB::table('bills')
            ->leftJoin('billers', 'bills.biller_id', '=', 'billers.id')
            ->leftJoin('categories', 'billers.category_id', '=', 'categories.id')
            ->where('status', 1)
            ->select('account_number', 'amount', 'billers.name AS billersName', 'categories.name AS categoriesName')
            ->get();

        return response()->json($data);
    }
}