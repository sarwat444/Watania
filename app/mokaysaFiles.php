<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mokaysaFiles extends Model
{
    use HasFactory;
    protected $table = 'mokaysa_files' ;
    protected $fillable = ['mokaysa_id' , 'path'] ;
}
