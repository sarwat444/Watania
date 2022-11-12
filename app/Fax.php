<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fax extends Model
{
    use HasFactory;

    protected $table = 'fax' ;
    protected $fillable = ['khas_geha' ,'kaed' ,'geha_ekhtesas' ,'waght_fax' ,'sader_elgeha_number' ,'esdar_date' ,'sader_elgeha_date' ,'description' ,'geha_fax' ,'addedby'] ;

   public function files()
   {
       return $this->hasMany('App\FaxFiles' ,'fax_id') ;
   }
}

