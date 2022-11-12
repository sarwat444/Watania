<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EltezamFile extends Model
{
    use HasFactory;
    protected $table = 'eltezam_files' ;
    protected $fillable =[
        'path' ,
        'eltezam_id'
    ];
}
