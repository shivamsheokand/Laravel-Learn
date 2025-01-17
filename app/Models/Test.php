<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    function getNameAttribute($val){
        return ucfirst($val);
    }
    function getEmailAttribute($val){
        return "S".$val;
    }
    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }
}
