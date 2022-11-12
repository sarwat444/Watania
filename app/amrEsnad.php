<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amrEsnad extends Model
{
    use HasFactory ;
    protected  $table = 'amresnad';
    protected  $fillable = ['esnad_number' , 'date' , 'geha_sader' ,'contract_value' ,'start_project' ,'end_project' , 'status' ,  'project_id'] ;

}
