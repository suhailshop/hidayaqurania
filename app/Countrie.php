<?php

namespace App;

use App\Universitie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Countrie extends Model 
{

    protected $table = 'countries';
    public $timestamps = true;


    protected $dates = ['deleted_at'];

    public function universities()
    {
        return $this->hasMany('App\Universitie');
    }

}