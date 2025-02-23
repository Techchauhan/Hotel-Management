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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->string('hotel_name');  
            $table->string('hotel_image')->nullable(); 
            $table->string('hotel_website')->nullable();
            $table->string('owner_name');
            $table->date('establishment_date');
            $table->enum('legally_registered', ['yes', 'no']);
            $table->string('contact_number')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('password'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
