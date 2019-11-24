<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable =['name','path','cover','categories_id','user_id','launch'];

    public function categories()
    {
        // belongsTo: une categorue peut avoir plusieur posts
        return $this->belongsTo('App\Categories');
    }
}
