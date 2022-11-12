<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eltezam extends Model
{
    use HasFactory;
    protected $table = 'eltezam' ;
    protected $fillable = [
        'content',
        'project_id',
    ];

    public function  files()
    {
        return $this->hasMany('App\EltezamFile' , 'eltezam_id') ;
    }


}
