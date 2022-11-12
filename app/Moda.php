<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moda extends Model
{
    use HasFactory;
    protected $table ='moda' ;
    protected $fillable = ['project_start' , 'project_end' , 'programe' , 'project_id' ,'amalmonfazavaliue' , 'egmalykemaamal' , 'nesbatanfeez' , 'time_added' , 'estlam_date' , 'estlam_fely'];
}
