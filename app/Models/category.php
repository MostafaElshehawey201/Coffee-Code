<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        "user_id",
        "is_active"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function translations(){
        return $this->morphMany(translation::class , 'translatable');
    }

    public function translate($key , $local = null){
        $local = $local ?? app()->getLocale();
        $translation = $this->translations()->where('key' , $key)->where('local' , $local)->first();
        return $translation ? $translation->value : null ;
    }
}
