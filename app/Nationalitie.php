<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationalitie extends Model 
{

    protected $table = 'nationalities';
    public $timestamps = true;


    protected $dates = ['deleted_at'];


    public function searcher()
    {
        return $this->hasMany('App\Registration');
    }
   

}