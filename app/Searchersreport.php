<?php

namespace App;

use App\Registration;
use App\Section;
use App\Committesreport;
use Illuminate\Database\Eloquent\Model;

class Searchersreport extends Model 
{

    protected $table = 'searchersreports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function searcher()
    {
        return $this->hasOne('App\Registration','ID','Searcher');
    }
    public function section()
    {
        return $this->hasOne('App\Section','ID','Section');
    }
    public function committesreport()
    {
        return $this->hasOne('App\Committesreport','Searcherreports','ID');
    }

}