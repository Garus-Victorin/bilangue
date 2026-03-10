<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create test user only if it doesn't exist
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'nom' => 'User',
                'prenom' => 'Test',
                'email' => 'test@example.com',
            ]);
        }

        $this->call([
            SalutationSeeder::class,
            CouleurSeeder::class,
            NombreSeeder::class,
            PartieDuCorpsSeeder::class,
            ExpressionBasiqueSeeder::class,
            PhraseBasiqueSeeder::class,
            PresentationSeeder::class,
            DemandeAideSeeder::class,
            ExpressionEcoleSeeder::class,
            ExpressionMaisonSeeder::class,
            ExpressionVoyageSeeder::class,
            ProduitSeeder::class,
        ]);
    }
}
