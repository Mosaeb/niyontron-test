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
        Schema::create('property_auths', function (Blueprint $table) {
            $table->id();
            $table->string('propertyType');
            $table->string('propetyAddress');
            $table->string('propetyCity');
            $table->string('propetyState');
            $table->integer('propetyZip');
            $table->string('LName');
            $table->string('Lmail');
            $table->integer('Lnumber');
            $table->string('details');
            $table->text('propertyImages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_auths');
    }
};
