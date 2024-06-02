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
        Schema::create('nqh_user', function (Blueprint $table) {
            $table->id();                                       
            $table->string('name');                        
            $table->string('username');
            $table->string('password');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');    
            $table->string('roles'); 
            $table->string('image')->nullable();   
            $table->string('address')->nullable();  
            $table->string('remember_token')->nullable();                           
            $table->unsignedTinyInteger('status')->default(2);              
            $table->unsignedInteger('created_by')->default(1);               
            $table->unsignedInteger('updated_by')->nullable();               
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nqh_user');
    }
};
