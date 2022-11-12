<?php

namespace App;
use Carbon\Carbon ;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'message',
    ];

    public function getCreatedAtAttribute($val)
    {
        return Carbon::parse($val)->format("Y/m/d H:i:s");
    }
}
