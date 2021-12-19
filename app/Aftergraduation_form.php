<?php

namespace App;

use App\Registration;
use Illuminate\Database\Eloquent\Model;

class Aftergraduation_form extends Model
{

    protected $table = 'Aftergraduation_forms';
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