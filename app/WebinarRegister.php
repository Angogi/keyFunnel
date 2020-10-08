<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarRegister extends Model
{
    protected $fillable = [
        'name', 'email', 'terminosYcondiciones',
    ];
}
