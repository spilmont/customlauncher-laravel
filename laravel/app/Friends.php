<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Friends extends Model
{
    protected $fillable = ['sender_id','receiver_id','state'];

    public function receiver(){

        return $this->belongsTo('App\User');

    }

    public function  sender(){
        return $this->belongsTo('App\User');
    }

}
