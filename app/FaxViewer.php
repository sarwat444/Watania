<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaxViewer extends Model
{
    use HasFactory;
    
    protected $table = 'fax_viewers' ;
    protected $fillable =['sector_id' ,'fax_id'] ;
}
