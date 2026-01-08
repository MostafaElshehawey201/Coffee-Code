<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public $fillable = [
        "user_id" , "file"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
