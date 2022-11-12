<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mostaklas extends Model
{
    use HasFactory;

    protected $table = 'mostaklas' ;

    protected $fillable = ['date' ,'value' , 'signature_name','status','project_id'] ;

    public function  files()
    {
        return $this->hasMany('App\MostaklasFiles' , 'mostaklas_id') ;
    }
}
