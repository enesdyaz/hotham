<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $fillable = ['title', 'photo'];

    public function eatDrink(){
        return belongsTo('App\eatdrink');
    }
}
