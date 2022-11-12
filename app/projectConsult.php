<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectConsult extends Model
{
    use HasFactory;
    protected $table = 'projectconsults' ;
    protected  $fillable = ['consult_name' , 'project_id' ] ;
}
