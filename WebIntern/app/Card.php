<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    protected $table = 'card';
    public $timestamps = false;
    public function user(){
        return $this->belongsto('App\User','user_id');

    }
    public function CardNumber(){
        return $this->hasOne('App\CardNumber','cardNumber_id');
    }
    public function CardDetail(){
        return $this->hasOne('App\CardDetail','cardDetail_id');
    }
}
