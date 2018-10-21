<?php

namespace App;

use App\Registration;
use App\Division;
use Illuminate\Database\Eloquent\Model;

class Search extends Model 
{

    protected $table = 'searchs';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function division()
    {
        return $this->hasOne('App\Division','ID','Division');
    }
    public function searcher()
    {
        return $this->hasOne('App\Registration','ID','Searcher');
    }

}