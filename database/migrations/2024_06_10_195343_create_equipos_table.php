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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string("descripcion",45);
            $table->string("codigo",45);
            $table->string("qr",45);
            $table->string("foto",45);
            $table->string("estado",45);
            $table->date("fechaalta");


            $table->unsignedBigInteger("numeroacta");

            $table->unsignedBigInteger("departamento_id");
            $table->foreign("departamento_id")->references("id")->on("departamentos");

            $table->unsignedBigInteger("provincia_id");
            $table->foreign("provincia_id")->references("id")->on("provincias");

            $table->unsignedBigInteger("personal_id");
            $table->foreign("personal_id")->references("id")->on("personals");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
