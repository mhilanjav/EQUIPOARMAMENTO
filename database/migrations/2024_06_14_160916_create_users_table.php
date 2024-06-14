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
        Schema::create('especialidad_personal', function (Blueprint $table) {
            $table->unsignedBigInteger("especialidad_id");
            $table->foreign("especialidad_id")->references("id")->on("especialidads");
  
            $table->unsignedBigInteger("personal_id");
            $table->foreign("personal_id")->references("id")->on("personals");

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialidad_personal');
    }
};
