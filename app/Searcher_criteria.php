<?php

namespace App;

use App\Criteria;
use Illuminate\Database\Eloquent\Model;

class Searcher_criteria extends Model
{
    
    protected $table = 'searcher_critera';
    public $timestamps = true;

    public function criteria(){
        return $this->belongsTo('App\Criteria','Criteria','ID');
    }
}
