<?php

namespace App;

use App\Registration;
use Illuminate\Database\Eloquent\Model;

class Help extends Model 
{

    protected $table = 'helps';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function searcher()
    {
        return $this->hasOne('App\Registration');
    }

}