<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTypes extends Model
{
    use HasFactory;
    protected $table = 'project_type'  ;
    protected $fillable = [
        'name', 'color',
    ];

}
