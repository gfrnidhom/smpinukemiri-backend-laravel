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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_student_id')->constrained('registration_students')->onDelete('cascade');
            // Kolom untuk setiap dokumen
            $table->string('pas_foto')->nullable(); // Foto
            $table->string('family_card')->nullable(); // Kartu Keluarga
            $table->string('id_card')->nullable(); // KTP Orang Tua
            $table->string('birth_certificate')->nullable(); // Akta Kelahiran
            $table->string('report_card')->nullable(); // Raport
            $table->string('diploma')->nullable();
            $table->string('pip_card')->nullable(); // Kartu PIP
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
