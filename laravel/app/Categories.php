<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function applications(){
        return $this->hasMany('App\Application');
    }
}
