<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akd extends Model
{
    use HasFactory;
    protected $table = 'akd' ; 
    protected $fillable = ['content','project_id'] ; 
    
    public function  files()
    {
        return $this->hasMany('App\AkdFiles' , 'akd_id') ;
    }
}
