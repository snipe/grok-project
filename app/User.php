<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

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

    public function companies()
    {
        return $this->hasMany('\App\Company', 'company_id');
    }

    public function projects()
    {
        return $this->belongsToMany('App\Project', 'users_projects');
    }

    public function avatar() {
        return "//gravatar.com/avatar/".md5(strtolower(trim($this->email)));
    }


}
