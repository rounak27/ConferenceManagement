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
        Schema::create("tbl_verifieremail", function (Blueprint $table) {
            $table->id();
            $table->string("email");
            $table->string("description");
            $table->timestamps();
        });

        DB::table('tbl_verifieremail')->insert([
            ['email' => 'prasunneupane14@gmail.com', 'description' => '' ],
            ['email' => 'ishwor.sapkota@lunivatech.com', 'description' => ''],
            ['email' => 'samundra.pdl2000@gmail.com', 'description' => ''],
           
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("tbl_verifieremail");
    }
};
