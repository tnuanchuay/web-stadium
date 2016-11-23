<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public function Stadium(){
        return $this->belongsTo('App\Stadium');
    }

    public function PriceRate(){
        return $this->hasMany('App\PriceRate');
    }
}
