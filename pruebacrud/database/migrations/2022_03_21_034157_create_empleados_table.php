<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('empleados', function (Blueprint $table) {
            $table->id(); //por default el ID es autoincremental
            $table ->string("Nombres");
            $table ->string("Apellidos");
            $table ->string("Edad");
            $table ->string("Carrera Universitaria");
            $table ->string("Correo");
            $table ->string("Fotografia");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
