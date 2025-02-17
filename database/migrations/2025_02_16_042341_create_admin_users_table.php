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
        Schema::create('tbl_admin_users', function (Blueprint $table) {
            $table->id(); // Primary Key (INT, Auto-increment)
            $table->string('FullName', 255); // NVARCHAR(255)
            $table->string('Email', 100)->unique(); // VARCHAR(100), UNIQUE
            $table->string('Password', 255); // VARCHAR(255)
            $table->integer('Role'); // INT (Can store Role ID)
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_admin_users');
    }
};
