<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table = 'book';

    public function relUsers(){
        //One book can only have one user (author)
        return $this->hasOne('App\User', 'id', 'id_user'); //Class , foreign key, local key
    }
}
