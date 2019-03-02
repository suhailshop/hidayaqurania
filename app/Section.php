<?php

namespace App;

use App\Division;
use Illuminate\Database\Eloquent\Model;

class Section extends Model 
{

    protected $table = 'sections';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function divisions(){
        return $this->hasMany('App\Division','Section','ID');
    }



}