<?php

namespace App;

use App\Registration;
use Illuminate\Database\Eloquent\Model;

class These extends Model 
{

    protected $table = 'theses';
    public $timestamps = false;


    protected $dates = ['deleted_at','updated_at'];

    public function supervisor()
    {
        return $this->hasOne('App\Registration','ID','Supervisor');
    }
    public function searcher()
    {
        return $this->hasOne('App\Registration');
    }

}