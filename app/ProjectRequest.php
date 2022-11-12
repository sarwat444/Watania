<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon ;

class ProjectRequest extends Model
{
    use HasFactory;

    protected $fillable = [
         'id' ,'name', 'phone', 'email',
        'title', 'description', 'logo',
        'start_date', 'end_date', 'price',
        'number_of_screens', 'project_type_id', 'project_status_id',
    ];

    public function getCreatedAtAttribute($val)
    {
        return Carbon::parse($val)->format("d M, Y");
    }

    public function getStartDateAttribute($val)
    {
        return Carbon::parse($val)->format("d M, Y");
    }

    public function getEndDateAttribute($val)
    {
        return Carbon::parse($val)->format("d M, Y");
    }
 //ok 
    public function type()
    {
        return $this->hasMany('App\ProjectType');
    }

    public function types()
    {

        return $this->belongsTo(ProjectType::class);
    }

    public function status()
    {
        return $this->belongsTo(ProjectStatus::class);
    }

    public function links()
    {
        return $this->hasMany('App\ProjectLink' , 'project_id');
    }

    public function files()
    {
        return $this->hasMany('App\ProjectFile' , 'project_id');
    }

    public function teams()
    {

       return $this->belongsToMany(Team::class, 'project_team')->withPivot([
            'price', 'path', 'creditor', 'debtor', 'team_status_id'
        ]);
    
    }

}
