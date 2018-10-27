<?php

namespace App;

use App\Searchersreport;
use App\Section;
use Illuminate\Database\Eloquent\Model;

class Committesreport extends Model 
{

    protected $table = 'committesreports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function searcherreport()
    {
        return $this->hasOne('App\Searchersreport','Searcherreports','ID');
    }
    public function section()
    {
        return $this->hasOne('App\Section','ID','Section');
    }
    public function supervisorreport()
    {
        return $this->hasOne('App\Registration','Supervisorreports','ID');
    }

}