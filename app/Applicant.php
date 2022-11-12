<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $table = 'applicantes' ;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'about',
        'job_id',
        'image',
        'status',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function files()
    {
        return $this->hasMany('App\ApplicantFile' , 'applicant_id');
    }

    
}
