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
        Schema::create('tbl_events', function (Blueprint $table) {
            $table->id(); // Primary Key (INT, Auto-increment)
            $table->string('EventName', 100); // NVARCHAR(100)
            $table->date('EventDate'); // DATE
            $table->time('EventTime'); // TIME
            $table->string('EventLocation', 100); // NVARCHAR(100)
            $table->text('EventDescription'); // TEXT
            $table->string('EventImage', 500)->nullable(); // NVARCHAR(500), Nullable
            $table->string('DayNumber', 20); // NVARCHAR(20)
            $table->boolean('IsCurrent')->default(false); // BIT (boolean, default to false)
            $table->boolean('IsActive')->default(true); // BIT (boolean, default to true)
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_events');
    }
};
