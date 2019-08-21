<?php

namespace App;

use App\Search;
use App\Registration;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Examiner_reports extends Model 
{

    protected $table = 'examiner_reports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function searcher()
    {
        return $this->hasOne('App\Registration','ID','searcher');
    }

    public function searche()
    {
        return $this->hasOne('App\Search','ID','search');
    }

   
}