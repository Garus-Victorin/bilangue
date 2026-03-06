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
        Schema::create('nombres', function (Blueprint $table) {
            $table->id('id_nombre');
            $table->integer('nombre');
            $table->string('francais');
            $table->string('goun');
            $table->string('fon');
            $table->string('yoruba');
            $table->string('dendi');
            $table->string('anglais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nombres');
    }
};
