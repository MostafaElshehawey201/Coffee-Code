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

    public function menus(){
        return $this->hasMany(Menu::class , 'sub_category_id' , 'id');
    }

    // public function translations(){
    //     return $this->morphMany(translation::class , 'translatable');
    // }

    // public function translate($key , $local = null){
    //     // دي ال بتجبلي البيانات علي حسب اللغة ال المستخدم طلب ان البيانات تيجي بيها
    //     $local = $local ?? app()->getLocale();
    //     $translation = $this->translations()->where('key' , $key)->where('local' , $local)->first();
    //     return $translation ? $translation->value : null ;
    // }
}
