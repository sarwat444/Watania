<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mokaysa extends Model
{
    use HasFactory;
    protected $table = 'mokaysa' ;

    protected $fillable = ['name' ,'project_id' , 'status' , 'owner_id'] ;

    public function  files()
    {
        return $this->hasMany('App\mokaysaFiles' , 'mokaysa_id') ;
    }
    public function bnood()
    {
        return $this->hasMany('App\MokaysaBnod' , 'mokaysa_id') ;
    }
}
