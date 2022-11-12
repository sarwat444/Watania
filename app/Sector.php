<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected  $table = 'sector' ;
    protected  $fillable = ['sector_name' , 'ordering'];
}
