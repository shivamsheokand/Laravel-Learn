<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    function manyToOne(){
        return $this->belongsTo('App\Models\Saller');
    }
}
