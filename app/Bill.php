<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
	protected $table = 'bills';

    public function biller()
    {
        return $this->belongsTo('\App\Biller');
    }
}