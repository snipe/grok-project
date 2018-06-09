<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function owner()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function projects()
    {
        return $this->hasMany('\App\Project', 'company_id');
    }


}
