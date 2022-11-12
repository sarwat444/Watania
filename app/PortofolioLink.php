<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioLink extends Model
{
    use HasFactory;

    protected  $fillable = ['url' , 'icon_id' , 'project_id'] ;   
}
