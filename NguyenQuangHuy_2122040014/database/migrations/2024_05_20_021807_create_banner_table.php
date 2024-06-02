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
        Schema::create('nqh_banner', function (Blueprint $table) {
            $table->id();                                       
            $table->string('name');                        
            $table->string('link',1000);                        
            $table->string('position');                         
            $table->text('description',1000)->nullable();            
            $table->string('image');           
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
        Schema::dropIfExists('nqh_banner');
    }
};
