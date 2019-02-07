<?php

namespace App;

use App\Registration;
use App\Division;
use App\Cycle;
use App\Divisionunit;
use App\ReviewerSearch;
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
    public function cycle()
    {
        return $this->hasOne('App\Cycle','ID','Cycle');
    }
    public function reviewerSearch(){
        return $this->hasMany('App\ReviewerSearch','search','ID');
    }

}