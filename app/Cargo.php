<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function cargo(){
        return $this->hasOne('drivers');
    }
}
