<?php

namespace App;

use App\Role;
use App\Registration;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
      
      return $this->belongsToMany(Role::class);
    }

    public function users()
    {
      return $this->belongsToMany(User::class);
    }

    public function registration(){
      return $this->hasOne(Registration::class,'User');
    }


    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    
    public function hasRole($role,$id)
    {
      $role_id = Role::where('name',$role)->first();

      if($role_id->id==$id)
        return true;
      else return false;
    }
    
    public function hasRoleAdmin2($email)
    {

      $exist = DB::select('select * from users 
                            inner join roles on roles.id=users.role_id 
                            where roles.name="admin2" and users.email="'.$email.'"');
                  

      if(count($exist) >= 1)
        return true;
      else return false;
    }

    public function hasRoleSupervisor($email)
    {
      $exist = DB::select('select * from users 
                            inner join roles on roles.id=users.role_id 
                            where roles.name="supervisor" and users.email="'.$email.'"');

      if(count($exist) >= 1)
        return true;
      else return false;
    }

    public function getCurrentRole($id){
      $role = DB::select('select roles.name as nam from users 
                          inner join roles on roles.id=users.role_id 
                          where users.id="'.$id.'"');
                        

      return $role[0]->nam;
    }
}
