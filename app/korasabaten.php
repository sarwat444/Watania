<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class korasabaten extends Model
{
    use HasFactory;
    protected $table = 'korasamalekowners' ;
    protected $fillable  = ['baten_name' , 'value' , 'korasa_id'] ;
}
