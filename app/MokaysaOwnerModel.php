<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MokaysaOwnerModel extends Model
{
    use HasFactory;
    protected $table = "mokaysa_owners" ;
    protected $fillable = ['owner_name' , 'mokaysa_id' , 'status']  ;

}
