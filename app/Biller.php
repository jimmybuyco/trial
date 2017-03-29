<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Biller extends Model
{
    protected $table = 'billers';

    public function category()
    {
        return $this->belongsTo('\App\Category');
    }

    public function getAllBiller()
    {
        return DB::table($this->table)
            ->leftJoin('categories', $this->table . '.category_id', '=', 'categories.id')
            ->select($this->table . '.name', $this->table . '.description', 'categories.name AS categoriesName')
            ->get();
    }
}