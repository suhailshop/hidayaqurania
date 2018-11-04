<?php

namespace App;

use App\Registration;
use App\Section;
use App\Search;
use App\Divisionunit;
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
    public function searchs(){
        return $this->hasMany('App\Search','Division','ID');
    }
    public function divisionunit(){
        return $this->hasMany('App\Divisionunit','Division','ID');
    }

}