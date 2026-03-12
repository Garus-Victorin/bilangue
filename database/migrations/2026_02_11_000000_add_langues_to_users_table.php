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
            $table->enum('langue_parlee', ['francais', 'anglais'])->nullable()->after('type');
            $table->enum('langue_apprendre', ['fon', 'goun', 'youba', 'dendi', 'bariba', 'yoruba'])->nullable()->after('langue_parlee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['langue_parlee', 'langue_apprendre']);
        });
    }
};
