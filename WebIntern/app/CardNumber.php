<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardNumber extends Model
{
    protected $table = 'cardNumber';
    protected $fillable = [
        'cell','status',

    ];
    public $timestamps = false;

    
}
