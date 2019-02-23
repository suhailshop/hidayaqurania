<?php

namespace App;

use App\User;
use App\Nationalitie;
use App\Countrie;
use App\These;
use App\Progress;
use App\Plan;
use App\Supervisors_reports;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    
    protected $table = 'registrations';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User','User','ID');
    }
    public function nationalitie(){
        return $this->belongsTo('App\Nationalitie','Nationalitie','ID');
    }
    public function countrie(){
        return $this->belongsTo('App\Countrie','Countrie','ID');
    }
    public function these(){
        return $this->hasOne('App\These','Searcher','ID');
    }
    public function searcher_criteria(){
        return $this->hasMany('App\Searcher_criteria','Searcher','ID');
    }
    public function progress(){
        return $this->hasOne('App\Progress','Searcher','ID');
    }
    public function plan(){
        return $this->hasMany('App\Plan','Searcher','ID');
    }
    public function supervisors_report(){
        return $this->hasMany('App\Supervisors_reports','supervisor','ID');
    }
    
}
