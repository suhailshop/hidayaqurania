<?php

namespace App;

use App\Division;
use App\Search;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Divisionunit extends Model 
{

    protected $table = 'divisionunits';
    public $timestamps = true;


    protected $dates = ['deleted_at'];

    public function division()
    {
        return $this->hasOne('App\Division');
    }
    public function divisionunit(){
        return $this->belongsTo('App\Search','id','Divisionunit');
    }

}