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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string("escalafon",15);
            $table->string("nombres",45);
            $table->string("apellidos",45);
            $table->boolean("estado")->default(1);

            $table->unsignedBigInteger("grado_id");
            $table->foreign("grado_id")->references("id")->on("grados");

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
