<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biller extends Model
{
    protected $table = 'billers';

    public function category()
    {
        return $this->belongsTo('\App\Category');
    }
}
