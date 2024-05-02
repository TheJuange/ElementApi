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
        Schema::create('elementos', function (Blueprint $table) {
            $table->id();
            $table->integer('num_atomico');
            $table->string('simbolo');
            $table->string('nombre');
            $table->integer('grupo');
            $table->integer('periodo');
            $table->string('densidad');
            $table->string('fusion');
            $table->string('ebullicion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elementos');
    }
};
