<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'applicant_id',
    ];
}
