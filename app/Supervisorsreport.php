<?php

namespace App;

use App\Registration;
use Illuminate\Database\Eloquent\Model;

class Supervisorsreport extends Model 
{

    protected $table = 'supervisorsreports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function supervisor()
    {
        return $this->hasOne('App\Registration','Supervisor','ID');
    }

}