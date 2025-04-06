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
        Schema::create('remedies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prescription');
            $table->integer('quantity');
            $table->string('type');
            $table->boolean('is_generic'); //fala se é Genérico ou Original
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remedies');
    }
};
