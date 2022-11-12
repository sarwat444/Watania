<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mawkefTanfezy extends Model
{
    use HasFactory;

    protected $table = 'mawkef_tanfezy' ;
    protected $fillable = [  'project_contents' ,
                            'contract_value' ,
                            'contract_date' ,
                            'project_start' ,
                            'project_end' ,
                            'execuation_percent',
                            'monsarf',
                            'monsarf_percent',
                            'estechary_office',
                            'notes',
                            'project_id',
                            'status'] ;

    public function  files()
    {
        return $this->hasMany('App\mawkefTanfezyFiles' , 'mowakef_id') ;
    }


}
