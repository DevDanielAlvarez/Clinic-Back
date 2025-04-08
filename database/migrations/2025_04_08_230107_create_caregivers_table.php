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
        Schema::create('caregivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf');
            $table->date('birth');
            $table->string('email');
            $table->string('phone');
            //$table->string('adress'); turning into a table
            $table->string('role'); //enum
            $table->string('period'); //enum
            $table->string('password'); //possible
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregivers');
    }
};
