<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    protected $table = 'other' ;
    protected $fillable = ['content','project_id'] ;

    public function  files()
    {
        return $this->hasMany('App\OtherFiles' , 'other_id') ;
    }
}

