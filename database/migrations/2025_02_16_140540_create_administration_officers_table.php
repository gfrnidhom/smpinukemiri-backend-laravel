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
        Schema::create('administration_officers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nip')->unique()->nullable();
            $table->string('position');
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('employment_status');
            $table->enum('religion', [
                'islam',
                'christian',
                'catholic',
                'hindu',
                'buddha',
                'confucian',
                'other'
            ])->nullable();
            $table->string('qualification');
            $table->string('specialization')->nullable();
            $table->text('address');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administration_officers');
    }
};
