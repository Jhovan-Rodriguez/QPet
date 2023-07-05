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
        Schema::table('users', function (Blueprint $table) {
            //Se agregan los campos a la tabla usuarios
            $table->string('username');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->date('fecha_nac');
            $table->tinyInteger('genero');
            $table->tinyInteger('tipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //Se eliminan las columnas con un rollback
            $table->dropColumn('username');
            $table->dropColumn('apellido_p');
            $table->dropColumn('apellido_m');
            $table->dropColumn('fecha_nac');
            $table->dropColumn('genero');
            $table->dropColumn('tipo_usuario');
        });
    }
};
