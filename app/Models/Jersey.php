<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jersey extends Model
{
    //relacion de uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class); //Relacion con la tabla users con el campo id
    }

    public function Category(){
        return $this->belongsTo(Category::class); //Relacion con la tabla users con el campo id
    }

    //relacion muchosa a muchos

    public function comments()
    {
        return $this->hasMany(Coments::class);
    }

    //relacion uno a uno polifimorfica

    public function image(){
        return $this->morphOne(images::class,'imageable');
    }
}


