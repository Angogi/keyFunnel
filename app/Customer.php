<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function freeEvaluations(){
        return $this->hasMany('App\FreeEvaluation');
    }
    
    protected $guarded = [];
}


