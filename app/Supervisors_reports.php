<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisors_reports extends Model 
{

    protected $table = 'supervisors_reports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

}