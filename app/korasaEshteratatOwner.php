<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class korasaEshteratatOwner extends Model
{
    use HasFactory;
    protected $table = 'korasamalekowners' ;
    protected  $fillable = ['owner_name' , 'value' , 'korasa_id' ] ;

}
