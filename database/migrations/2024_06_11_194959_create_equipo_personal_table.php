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
        Schema::create('equipo_personal', function (Blueprint $table) {
          $table->unsignedBigInteger("equipo_id");
          $table->foreign("equipo_id")->references("id")->on("equipos");

          $table->unsignedBigInteger("personal_id");
          $table->foreign("personal_id")->references("id")->on("personals");

          $table->date("fechahoraprestamo");
          $table->date("fechahoradevolucion");
          $table->string("firma",45);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipo_personal');
    }
};
