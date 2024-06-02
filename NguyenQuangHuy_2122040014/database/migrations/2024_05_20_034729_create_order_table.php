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
        Schema::create('nqh_order', function (Blueprint $table) {
            $table->id();            
            $table->unsignedInteger('user_id');                       
            $table->string('delivery_name');  
            $table->string('delivery_gender');
            $table->string('delivery_email');
            $table->string('delivery_phone');
            $table->string('delivery_address',1000);  
            $table->string('note',1000)->nullable();
            $table->string('type',50)->nullable();  
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
        Schema::dropIfExists('nqh_order');
    }
};
