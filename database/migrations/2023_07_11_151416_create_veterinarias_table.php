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
        Schema::create('veterinarias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('calle');
            $table->string('colonia');
            $table->string('estado');
            $table->string('ciudad');
            $table->integer('cp');
            $table->string('telefono');
            $table->string('email');
            $table->integer('num_ext');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarias');
    }
};
