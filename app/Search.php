<?php

namespace App;

use App\Registration;
use App\Division;
use App\Cycle;
use App\Divisionunit;
use App\ReviewerSearch;
use App\Reviewers_reports;
use App\Supervisors_reports;
use App\Searchers_reports;
use App\Admin2_reports;
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
    public function admin2_reports(){
        return $this->hasMany('App\Admin2_reports','search','ID')->limit(1);
    }
    public function supervisors_reports(){
        return $this->hasMany('App\Supervisors_reports','search','ID');
    }
    public function searchers_reports(){
        return $this->hasMany('App\Searchers_reports','search','ID');
    }
    public function reviewers_reports(){
        return $this->hasMany('App\Reviewers_reports','search','ID');
    }
}