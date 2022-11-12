<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KorasaEshtertatFiles extends Model
{
    use HasFactory;
    protected $table = 'korasa_eshtertat_files' ; 
    protected $fillable  = ['path' , 'korasa_id'] ;
}
