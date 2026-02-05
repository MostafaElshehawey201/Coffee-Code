<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class translation extends Model
{
    protected $fillable = [ 
        "translatable_type" , "translatable_id" , 'key' , 'value' , 'local'
    ];

    public function translatable(){
        return $this->morphTo();
    }


}
