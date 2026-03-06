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
        Schema::create('expressions_basiques', function (Blueprint $table) {
            $table->id('id_expression_basique');
            $table->string('nom');
            $table->string('image')->nullable();
            $table->text('francais');
            $table->text('goun');
            $table->text('fon');
            $table->text('yoruba');
            $table->text('dendi');
            $table->text('anglais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expressions_basiques');
    }
};
