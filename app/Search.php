<?php

namespace App;

use App\Registration;
use App\Division;
use App\Divisionunit;
use Illuminate\Database\Eloquent\Model;

class Search extends Model 
{

    protected $table = 'searchs';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function division()
    {
        return $this->hasOne('App\Division','ID','Division');
    }
    public function divisionunit()
    {
        return $this->hasOne('App\Divisionunit','id','Divisionunit');
    }
    public function searcher()
    {
        return $this->hasOne('App\Registration','ID','Searcher');
    }

}