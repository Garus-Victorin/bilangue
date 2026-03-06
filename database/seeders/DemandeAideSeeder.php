<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DemandeAide;

class DemandeAideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $demandesAide = [
            [
                'demande_aide' => 'Aide-moi s’il te plaît',
                'francais' => 'Aide-moi s’il te plaît',
                'goun' => 'Aide-moi s’il te plaît (Goun)',
                'fon' => 'Aide-moi s’il te plaît (Fon)',
                'yoruba' => 'Aide-moi s’il te plaît (Yoruba)',
                'dendi' => 'Aide-moi s’il te plaît (Dendi)',
                'anglais' => 'Help me please',
            ],
            [
                'demande_aide' => 'Peux-tu m’aider ?',
                'francais' => 'Peux-tu m’aider ?',
                'goun' => 'Peux-tu m’aider ? (Goun)',
                'fon' => 'Peux-tu m’aider ? (Fon)',
                'yoruba' => 'Peux-tu m’aider ? (Yoruba)',
                'dendi' => 'Peux-tu m’aider ? (Dendi)',
                'anglais' => 'Can you help me?',
            ],
            [
                'demande_aide' => 'J’ai besoin d’aide',
                'francais' => 'J’ai besoin d’aide',
                'goun' => 'J’ai besoin d’aide (Goun)',
                'fon' => 'J’ai besoin d’aide (Fon)',
                'yoruba' => 'J’ai besoin d’aide (Yoruba)',
                'dendi' => 'J’ai besoin d’aide (Dendi)',
                'anglais' => 'I need help',
            ],
            [
                'demande_aide' => 'Où puis-je trouver de l’aide ?',
                'francais' => 'Où puis-je trouver de l’aide ?',
                'goun' => 'Où puis-je trouver de l’aide ? (Goun)',
                'fon' => 'Où puis-je trouver de l’aide ? (Fon)',
                'yoruba' => 'Où puis-je trouver de l’aide ? (Yoruba)',
                'dendi' => 'Où puis-je trouver de l’aide ? (Dendi)',
                'anglais' => 'Where can I find help?',
            ],
            [
                'demande_aide' => 'Excuse-moi, j’ai un problème',
                'francais' => 'Excuse-moi, j’ai un problème',
                'goun' => 'Excuse-moi, j’ai un problème (Goun)',
                'fon' => 'Excuse-moi, j’ai un problème (Fon)',
                'yoruba' => 'Excuse-moi, j’ai un problème (Yoruba)',
                'dendi' => 'Excuse-moi, j’ai un problème (Dendi)',
                'anglais' => 'Excuse me, I have a problem',
            ],
            [
                'demande_aide' => 'S’il vous plaît, aidez-moi',
                'francais' => 'S’il vous plaît, aidez-moi',
                'goun' => 'S’il vous plaît, aidez-moi (Goun)',
                'fon' => 'S’il vous plaît, aidez-moi (Fon)',
                'yoruba' => 'S’il vous plaît, aidez-moi (Yoruba)',
                'dendi' => 'S’il vous plaît, aidez-moi (Dendi)',
                'anglais' => 'Please help me',
            ],
        ];

        foreach ($demandesAide as $demande) {
            DemandeAide::create($demande);
        }
    }
}
