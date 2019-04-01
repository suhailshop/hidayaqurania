<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Search;

class Cycle extends Model 
{

    protected $table = 'cycles';
    public $timestamps = true;

    public function searchs(){
        return $this->hasMany('App\Search','Cycle','ID');        
    }

}