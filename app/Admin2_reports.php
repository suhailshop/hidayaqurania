<?php

namespace App;

use App\Search;
use App\Registration;
use Illuminate\Database\Eloquent\Model;

class Admin2_reports extends Model 
{

    protected $table = 'admin2_reports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function admi2()
    {
        return $this->hasOne('App\Registration','ID','admin2');
    }
}