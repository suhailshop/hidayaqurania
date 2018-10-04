<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    
    protected $table = 'registrations';
    public $timestamps = true;

    public function user(){
        return $this->hasOne('User');
    }
}
