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
        Schema::table('tbl_abstract_contents', function (Blueprint $table) {
            $table->boolean('IsActive')->default(true); // Add the 'status' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_abstract_contents', function (Blueprint $table) {
            $table->dropColumn('IsActive'); // Drop the 'status' column
        });
    }
};
