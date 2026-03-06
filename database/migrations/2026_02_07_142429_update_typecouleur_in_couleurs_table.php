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
        // Update existing records with typecouleur values
        DB::table('couleurs')->where('couleur', 'rouge')->update(['typecouleur' => '#FF0000']);
        DB::table('couleurs')->where('couleur', 'bleu')->update(['typecouleur' => '#0000FF']);
        DB::table('couleurs')->where('couleur', 'vert')->update(['typecouleur' => '#00FF00']);
        DB::table('couleurs')->where('couleur', 'jaune')->update(['typecouleur' => '#FFFF00']);
        DB::table('couleurs')->where('couleur', 'noir')->update(['typecouleur' => '#000000']);
        DB::table('couleurs')->where('couleur', 'blanc')->update(['typecouleur' => '#FFFFFF']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Optionally, set typecouleur to null for existing records
        DB::table('couleurs')->update(['typecouleur' => null]);
    }
};
