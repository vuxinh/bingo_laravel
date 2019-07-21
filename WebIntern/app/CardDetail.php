<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardDetail extends Model
{
    //
    protected $table = 'cardDetail';
    protected $fillable = [
        'status', 'cell',
    ];
    public $timestamps = false;
    
}
