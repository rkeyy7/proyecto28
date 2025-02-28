<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coments extends Model
{
    //Relacion uno a muchos

    public function jerseys(){
        return $this->hasMany(coments::class);
    }
}
