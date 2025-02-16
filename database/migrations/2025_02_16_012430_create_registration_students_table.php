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
        Schema::create('registration_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->foreignId('enrollment_period_id')->constrained('enrollment_periods')->onDelete('cascade');
            $table->string('full_name');
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('birthplace');
            $table->date('birthdate');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('religion', ['Islam', 'Christian', 'Catholic', 'Hindu', 'Buddhist', 'Confucianism']);
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('subdistrict_id')->nullable();
            $table->unsignedBigInteger('postal_code')->nullable();
            $table->text('address');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('previous_school');
            $table->string('accepted_class')->nullable();
            $table->string('guardian_relationship')->nullable();
            $table->timestamp('registration_date')->useCurrent();
            $table->text('additional_notes')->nullable();
            $table->enum('registration_status', ['Pending', 'Accepted', 'Rejected'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_students');
    }
};
