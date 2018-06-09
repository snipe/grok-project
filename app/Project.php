<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function owner()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function requirements()
    {
        return $this->hasMany('\App\Requirement', 'project_id');
    }

    public function company()
    {
        return $this->belongsTo('\App\Company', 'company_id');
    }

    public function sections()
    {
        return $this->hasMany('\App\Section', 'project_id');
    }

    public function testenvs()
    {
        return $this->belongsToMany('App\TestEnv', 'projects_test_envs',
            'project_id', 'test_env_id');
    }


}
