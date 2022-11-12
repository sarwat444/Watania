<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;
    protected $table = 'project_types'  ;
    protected $fillable = [
        'project_id', 'project_type_id',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_type');
    }
}
