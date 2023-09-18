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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();  //PK
            $table->foreignId(column: 'user_id')->constrained(table: 'users')->cascadeOnDelete();  //FK
            $table->string('title')->unique(); //varchar(255)
            $table->longText('description'); //varchar(255)
            $table->text('excerpt')->nullable(); 
            $table->boolean('is_published')->default(false); 
            $table->integer('min_to_read')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
