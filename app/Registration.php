<?php

namespace App;

use App\User;
use App\Nationalitie;
use App\Countrie;
use App\These;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    
    protected $table = 'registrations';
    public $timestamps = true;

    public function user(){
        return $this->hasOne('User');
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
}
