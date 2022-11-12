<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'about',
        'job_id',
        'image',
        'status',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function projects()
    {
        return $this->belongsToMany(ProjectRequest::class, 'project_team')->withPivot([
            'team_status_id',
        ]);
    }
}
