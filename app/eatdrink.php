<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eatdrink extends Model
{
    protected $fillable=['name', 'subtitle', 'address', 'phone', 'tradinghour', 'description', 'image', 'category_id'];

    public function eatDrink(){
        return hasMany('App\eatdrink');
    }
}
