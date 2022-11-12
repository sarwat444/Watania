<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectOwner extends Model
{
    use HasFactory;
    protected $table = 'projectowners' ;
    protected  $fillable = ['owner_name' , 'project_id' ] ;
}
