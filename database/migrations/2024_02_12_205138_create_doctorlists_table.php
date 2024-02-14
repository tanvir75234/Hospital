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
        Schema::create('doctorlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doc_name');
            $table->string('doc_phone');
            $table->string('doc_email');
            $table->string('doc_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctorlists');
    }
};
