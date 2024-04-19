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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_name'); // Register as Landlord, Tenant, or Service provider
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->nullable();
            $table->string('mobile')->unique();
            $table->string('house_no');
            $table->string('road_no');
            $table->integer('city');
            $table->string('state');
            $table->integer('country');
            $table->string('zip_code');
            $table->date('date_of_birth');
            $table->string('gender')->nullable();
            $table->text('nid'); // National Identity Card (NID) photo
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
