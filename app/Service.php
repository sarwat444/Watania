<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = ['service_name','description'];
    
        public function images()
    {
        return $this->hasMany('App\ServiceImage' , 'service_id');
    }
        public function getFirstImageAttribute()
    {
        return $this->images()->select(["service_id", "image", 'id'])->first();
    }
}
