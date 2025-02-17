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
        Schema::create('tbl_conference', function (Blueprint $table) {
            $table->id(); // Primary Key (INT, Auto-increment)
            $table->string('ConferenceName', 255); // VARCHAR(255)
            $table->date('StartDate'); // DATE
            $table->date('EndDate'); // DATE
            $table->string('Location', 255); // VARCHAR(255)
            $table->text('Description'); // TEXT
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_conference');
    }
};
