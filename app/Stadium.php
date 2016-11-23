<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    public $table = 'stadiums';

    public function Field(){
        return $this->hasMany('App\Field');
    }
}
