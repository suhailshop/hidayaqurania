<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $table = 'roles';
    public $timestamps = true;

    public function user(){
        return $this->hasMany('App\User');
    }
}
