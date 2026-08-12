<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('parent_students', function (Blueprint $table) {
            $table->string('father_religion')->nullable()->after('father_name');
            $table->string('mother_religion')->nullable()->after('mother_name');
        });
    }

    public function down()
    {
        Schema::table('parent_students', function (Blueprint $table) {
            $table->dropColumn(['father_religion', 'mother_religion']);
        });
    }
};
