<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

//    TODO :: EDITED

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'job_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     protected $appends = ['roles_list'];

    public function getRolesListAttribute()
    {
        return $this->roles()->pluck('id')->toArray();
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function vendor(){
        return $this->hasOne('App\Models\Category');
    }
}
