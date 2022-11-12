<?php
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MokaysaBnod extends Model
{
    use HasFactory;
    protected $table  =  'mokaysa_bnod' ; 
    protected $fillable = ['element' , 'unit' ,'quantity' , 'feka' , 'total' , 'mokaysa_id'] ; 

}
