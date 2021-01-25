<?php

namespace App;

use App\Countrie;
use Illuminate\Database\Eloquent\Model;

class Universitie extends Model 
{

    protected $table = 'universities';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function countrie()
    {
        return $this->belongsTo('App\Countrie','Countrie','ID');
    }

    public function registration()
    {
        return $this->belongsTo('App\Registration', 'Registration','ID');
    }

}