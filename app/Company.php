<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_id',
    ];

    public function owner()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function projects()
    {
        return $this->hasMany('\App\Project', 'company_id');
    }


}
