<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
                              'title',
                              'start_date' ,
                              'head_maktabfany' ,
                              'end_date' ,
                              'sector' ,
                              'project_status' ,
                              'project_type',
                              'description' ,
                              'wataniaresp',
                              'take_amount' ,
                              'need_amount' ,
                              'total_amount' ,
                              'baten_amount' ,
                              'esteshary_total' 
                              
                          ] ;

    public function images()
    {
        return $this->hasMany('App\PortofolioImage' , 'project_id');
    }
    public function owners()
    {
        return $this->hasMany('App\projectOwner' , 'project_id');
    }

    public function consults()
    {
        return $this->hasMany('App\projectConsult' , 'project_id');
    }

    public function links()
    {
        return $this->hasMany('App\PortofolioLink' , 'project_id');
    }



}
