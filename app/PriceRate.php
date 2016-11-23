<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceRate extends Model
{
    public $table="price_rate";

    public function Field(){
        return $this->belongsTo('App\Field');
    }
}
