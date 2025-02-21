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
        Schema::create('tbl_member_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('IsActive');
            
            $table->timestamps();
        });
        DB::table('tbl_member_types')->insert([
            ['name' => 'NEPAS MEMBER', 'description' => '', 'IsActive' => 1],
            ['name' => 'NON – NEPAS MEMBER', 'description' => '', 'IsActive' => 1],
            ['name' => 'RESIDENT/ MEDICAL OFFICER / INTERN / NURSE', 'description' => '', 'IsActive' => 1],
            ['name' => 'SAARC DELEGATE', 'description' => '', 'IsActive' => 1],
            ['name' => 'INTERNATIONAL DELEGATE', 'description' => '', 'IsActive' => 1],
            ['name' => 'ACCOMPANYING PERSON', 'description' => '', 'IsActive' => 1],
            ['name' => 'CORPORATE REGISTRATION', 'description' => '', 'IsActive' => 1],
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_member_types');
    }
};
