<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeEvaluation extends Model
{
    public function Customer(){

        return $this->hasOne('App\Customer','customer_id');
    }

    protected $guarded = [];
}

