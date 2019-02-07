<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Searchers_reports extends Model 
{

    protected $table = 'searchers_reports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

}