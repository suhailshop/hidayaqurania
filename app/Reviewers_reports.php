<?php

namespace App;

use App\Registration;

use Illuminate\Database\Eloquent\Model;

class Reviewers_reports extends Model 
{

    protected $table = 'reviewers_reports';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

    public function reviewe()
    {
        return $this->hasOne('App\Registration','ID','reviewer');
    }

}