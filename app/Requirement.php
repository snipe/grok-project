<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public function owner()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function assignments()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function project()
    {
        return $this->belongsTo('\App\Project', 'project_id');
    }


}
