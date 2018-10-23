<?php

namespace App;

use App\Universitie;
use Illuminate\Database\Eloquent\Model;

class Facultie extends Model 
{

    protected $table = 'faculties';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function universitie(){
        return $this->hasOne('App\Universitie','ID','University');
    }

}