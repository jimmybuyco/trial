<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bill extends Model
{
    protected $table = 'bills';

    public function biller()
    {
        return $this->belongsTo('\App\Biller');
    }

    public function getAllBills()
    {
        return DB::table($this->table)
             ->leftJoin('billers', 'bills.biller_id', '=', 'billers.id')
             ->leftJoin('categories', 'billers.category_id', '=', 'categories.id')
            ->where('status', 1)
             ->select('bills.id AS id','logo', 'amount', 'billers.name AS billersName', 'categories.name AS categoryName','account_number','amount')
//            ->take(10)
            ->get();
    }
}