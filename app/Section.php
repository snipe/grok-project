<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function project()
    {
        return $this->belongsTo('\App\Project', 'project_id');
    }

    public function requirements()
    {
        return $this->hasMany('\App\Requirement', 'section_id');
    }

    public function testcases()
    {
        return $this->hasManyThrough('\App\TestCase', '\App\Requirement', 'section_id');
    }

    public function subsections()
    {
        return $this->hasMany('\App\Section', 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('\App\Section', 'parent_id');
    }
}
