<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'status',
    ];

    public function getStartDateAttribute($val)
    {
        return Carbon::parse($val)->format("d M, Y");
    }

    public function getEndDateAttribute($val)
    {
        return Carbon::parse($val)->format("d M, Y");
    }
}
