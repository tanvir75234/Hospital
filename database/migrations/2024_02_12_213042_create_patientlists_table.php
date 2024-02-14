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
        Schema::create('patientlists', function (Blueprint $table) {
            $table->bigIncrements('patient_id');
            $table->string('patient_name');
            $table->string('patient_phone');
            $table->string('patient_email');
            $table->string('patient_category');
            $table->string('patient_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patientlists');
    }
};
