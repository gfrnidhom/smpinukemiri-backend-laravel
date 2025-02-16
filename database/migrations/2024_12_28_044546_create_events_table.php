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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // Untuk URL SEO-friendly
            $table->string('event_name'); // Nama event
            $table->date('start_date'); // Tanggal mulai event
            $table->date('end_date')->nullable(); // Tanggal selesai event
            $table->time('start_time'); // Waktu mulai event
            $table->time('end_time'); // Waktu selesai event
            $table->text('description')->nullable(); // Deskripsi event
            $table->unsignedBigInteger('event_category_id');
            $table->unsignedBigInteger('event_location_id');
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
