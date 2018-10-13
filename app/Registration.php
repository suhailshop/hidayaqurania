<?php

namespace App;

use App\User;
use App\Nationalitie;
use App\Countrie;
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

}
