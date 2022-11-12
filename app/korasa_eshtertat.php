<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class korasa_eshtertat extends Model
{
    use HasFactory;
    
    protected $table = 'korasa_eshtratat' ; 
    protected $fillable = ['content' ,'status' ,'project_id'] ; 
    
    public function  files()
    {
        return $this->hasMany('App\KorasaEshtertatFiles' , 'korasa_id') ;
    }
    public  function  korasamalekowners()
    {
        return $this->hasMany('App\korasaEshteratatOwner' , 'korasa_id') ;
    }

}
