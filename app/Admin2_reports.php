<?php

namespace App;

use App\Search;
use Illuminate\Database\Eloquent\Model;

class Admin2_reports extends Model 
{

    protected $table = 'admin2_reports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

  
}