<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saller extends Model
{
    //
    function productData(){
        return $this->hasOne('App\Models\Item');
    }
    function many(){
        return $this->hasMany('App\Models\Item');
    }
}
