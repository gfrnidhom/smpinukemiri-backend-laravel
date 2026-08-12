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
            $table->string('registration_number')->unique();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->foreignId('enrollment_period_id')->constrained('enrollment_periods')->onDelete('cascade');
            $table->string('full_name');
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('birthplace');
            $table->date('birthdate');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('religion', ['Islam', 'Christian', 'Catholic', 'Hindu', 'Buddhist', 'Confucianism']);
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->enum('previous_school', ['sd', 'mi']);
            $table->string('previous_school_name');
            $table->timestamp('registration_date')->useCurrent();
            $table->string('province_code', 2)->nullable();
            $table->string('city_code', 4)->nullable();
            $table->string('district_code', 6)->nullable();
            $table->string('village_code', 10)->nullable();
            $table->string('postal_code')->nullable();
            $table->text('address');
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
