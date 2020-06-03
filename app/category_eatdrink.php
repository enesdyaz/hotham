<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_eatdrink extends Model
{
    protected $fillable=['name'];

    public function eatDrink(){
        return hasMany('App\eatdrink');
    }
}
