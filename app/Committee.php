<?php

namespace App;

use App\Searchersreport;
use App\Section;
use App\Committee;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model 
{

    protected $table = 'committees';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];


}