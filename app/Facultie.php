<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultie extends Model 
{

    protected $table = 'faculties';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

 

}