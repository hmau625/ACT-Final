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
       Schema::create('appointments', function (Blueprint $table) {
        $table->id();
        $table->string('patient_name')->nullable();
        $table->string('doctor_name')->nullable();
        $table->date('date');
        $table->time('time');
        $table->string('reason')->nullable();
        $table->string('status')->default('pendiente');
        $table->string('lab')->default('201');
        $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
