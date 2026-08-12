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
        Schema::table('school_headmasters', function (Blueprint $table) {
            $table->string('image')->nullable()->after('remarks'); // Menambahkan kolom image setelah end_date
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('school_headmasters', function (Blueprint $table) {
            //
            $table->dropColumn('image');
        });
    }
};
