<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        "created_by" , "category_id" , "is_active"
    ];

    public function created_by(){
        return $this->belongsTo(User::class , 'created_by' , 'id');
    }

    public function translations(){
        return $this->morphMany(translation::class , 'translatable');
    }

    public function translate($key , $local = null){
        // اما هيساوي ال local  ال المستخدم طلبة او لو المستخدم مطلبش لغة ف هيبق لغة النظام هي اللغة الاصلية للبرنامج 
        $local = $local ?? app()->getLocale();
        $translation = $this->translations()->where('key' , $key)->where('local' , $local)->first();
        return $translation ? $translation->value : null ;
    }
}
