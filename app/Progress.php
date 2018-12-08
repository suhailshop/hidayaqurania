<?php

namespace App;

use App\Registration;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model 
{

    protected $table = 'progress';
    public $timestamps = true;


    protected $dates = ['updated_at'];

    public function searcher()
    {
        return $this->hasOne('App\Registration','ID','Searcher');
    }    

}