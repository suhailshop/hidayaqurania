<?php

namespace App;

use App\Search;
use App\Registration;
use Illuminate\Database\Eloquent\Model;

class ReviewerSearch extends Model 
{

    protected $table = 'reviewersearchs';
    public $timestamps = true;


    protected $dates = ['deleted_at','updated_at'];

   
    public function reviewer()
    {
        return $this->hasOne('App\Registration','ID','reviewer');
    }
    public function search()
    {
        return $this->hasOne('App\Search','ID','search');
    }


}