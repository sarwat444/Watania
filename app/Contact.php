<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts' ; 
    protected $fillable =[
        'address' ,
        'email' ,
        'phone' ,
        'lat' ,
        'lng'
    ];
}
