<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('usuarios', function (Blueprint $table) {
        $table->string('senha', 255)->change(); // Ajusta o tamanho da coluna
    });
}

public function down()
{
    Schema::table('usuarios', function (Blueprint $table) {
        $table->string('senha', 100)->change(); // Reverte para o tamanho anterior (ou ajuste conforme necessário)
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            //
        });
    }
};
