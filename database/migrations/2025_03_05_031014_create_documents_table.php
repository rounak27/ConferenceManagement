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
        Schema::create('tbl_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tbl_users')->onDelete('cascade');
            $table->longText('payment_document')->nullable();
            $table->longText('medical_letter_document')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_documents');
    }

};
