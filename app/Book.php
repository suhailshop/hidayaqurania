<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model 
{

    protected $table = 'books';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

}