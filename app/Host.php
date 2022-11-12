<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon ;

class Host extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'status',
    ];

    public function getCreatedAtAttribute($val)
    {
        return Carbon::parse($val)->format("Y/m/d");
    }

    public function services()
    {
        return $this->hasMany(HostService::class, 'host_id');
    }



}
