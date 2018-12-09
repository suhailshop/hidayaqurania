<?php

namespace App;

use App\Registration;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model 
{

    protected $table = 'plans';
    public $timestamps = true;


    protected $dates = ['updated_at'];

    public function searcher()
    {
        return $this->hasOne('App\Registration','ID','Searcher');
    }    

}