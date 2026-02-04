<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('translatable_type'); //   category , menu , emplyess ولا مينالترجمة دي تبع مين
            $table->string('local',5);  // اللغة ال هيتجم ليها 
            $table->string('key');  // نوع النص ال هيتجم ان كان title , body او غيرة 
            $table->text('value');  // النص نفسة ال هيتجم 
            $table->unsignedBigInteger('translatable_id');  // التجمة دي تبع انهي recored   
            $table->timestamps();
            $table->index(['translatable_type' , 'translatable_id']);
            $table->index('local');
            $table->unique(['translatable_type' , 'translatable_id' , 'local'  ,'key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
