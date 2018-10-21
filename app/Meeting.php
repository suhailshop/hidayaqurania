<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model 
{

    protected $table = 'meetings';
    public $timestamps = true;


    protected $dates = ['updated_at'];

    

}