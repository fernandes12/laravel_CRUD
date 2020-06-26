<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table = 'book';

    //Laravel only accepts these variables to be inserted
    //It will not work if we don´t use this
    protected $fillable =['title', 'id_user', 'pages', 'price'];

    public function relUsers(){
        
        //One book can only have one user (author)
        return $this->hasOne('App\User', 'id', 'id_user'); //Class , foreign key, local key
    }
}
