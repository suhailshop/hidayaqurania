<?php

namespace App;

use App\Registration;
use App\Section;
use Illuminate\Database\Eloquent\Model;

class Division extends Model 
{

    protected $table = 'divisions';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function section()
    {
        return $this->hasOne('App\Section','ID','Section');
    }

}