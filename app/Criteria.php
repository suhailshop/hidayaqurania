<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model 
{

    protected $table = 'criterias';
    public $timestamps = true;


    protected $dates = ['deleted_at'];

   

}