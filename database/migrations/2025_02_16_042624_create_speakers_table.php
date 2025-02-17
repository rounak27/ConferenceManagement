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
        Schema::create('tbl_speakers', function (Blueprint $table) {
            $table->id(); // Primary Key (INT, Auto-increment)
            $table->string('FullName', 100); // NVARCHAR(100)
            $table->text('About'); // TEXT
            $table->string('SocialLink', 255)->nullable(); // NVARCHAR(255), Nullable
            $table->string('Image', 500)->nullable(); // NVARCHAR(500), Nullable
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_speakers');
    }
};
