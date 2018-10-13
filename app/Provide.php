<?php

namespace App;

use App\Registration;
use App\Book;
use Illuminate\Database\Eloquent\Model;

class Provide extends Model 
{

    protected $table = 'provides';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function searcher()
    {
        return $this->hasOne('App\Registration');
    }
    public function book()
    {
        return $this->hasOne('App\Book');
    }

}