<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DemandeAide;

class DemandeAideSeeder extends Seeder
{
    public function run(): void
    {
        $demandesAide = [
            [
                'demande_aide' => 'Aide-moi sil te plait',
                'francais' => 'Aide-moi sil te plait',
                'goun' => 'Dɔ mi nu',
                'fon' => 'Dɔ mi nu',
                'yoruba' => 'Ran mi lọwọ́',
                'dendi' => 'Dɔ mi nu',
                'anglais' => 'Help me please',
                'emoji' => '🆘',
            ],
            [
                'demande_aide' => 'Peux-tu maider ?',
                'francais' => 'Peux-tu maider ?',
                'goun' => 'A dɔ mi e ?',
                'fon' => 'A dɔ mi e ?',
                'yoruba' => 'Ṣe ìrìn àjụ́ rẹ̀ ?',
                'dendi' => 'A dɔ mi e ?',
                'anglais' => 'Can you help me?',
                'emoji' => '❓',
            ],
            [
                'demande_aide' => 'Jai besoin daide',
                'francais' => 'Jai besoin daide',
                'goun' => 'Mi ta dɔ',
                'fon' => 'Un ta dɔ',
                'yoruba' => 'Mo ni ero inu',
                'dendi' => 'Mi ta dɔ',
                'anglais' => 'I need help',
                'emoji' => '😰',
            ],
            [
                'demande_aide' => 'Ou puis-je trouver de laide ?',
                'francais' => 'Ou puis-je trouver de laide ?',
                'goun' => 'Nuti a dɔ wa di ?',
                'fon' => 'Ta ke a dɔ wa xɛ ?',
                'yoruba' => 'Nibo ni mo le ri iranlowo ?',
                'dendi' => 'Nuti a dɔ wa di ?',
                'anglais' => 'Where can I find help?',
                'emoji' => '🔍',
            ],
            [
                'demande_aide' => 'Excuse-moi, jai un probleme',
                'francais' => 'Excuse-moi, jai un probleme',
                'goun' => 'Mi sɔnudo, mi ta sɛ',
                'fon' => 'Mi sɔnudo, un ta sɛ',
                'yoruba' => 'Ẹ jọ̀ọ́rọ̀, oúnje kan padà',
                'dendi' => 'Mi sɔnudo, mi ta sɛ',
                'anglais' => 'Excuse me, I have a problem',
                'emoji' => '😟',
            ],
            [
                'demande_aide' => 'Sil vous plait, aidez-moi',
                'francais' => 'Sil vous plait, aidez-moi',
                'goun' => 'Dɔ nu mi',
                'fon' => 'Dɔ nu mi',
                'yoruba' => 'Jọ̀ọ́wọ́, ran mi lọ́wọ́',
                'dendi' => 'Dɔ nu mi',
                'anglais' => 'Please help me',
                'emoji' => '🙏',
            ],
        ];

        foreach ($demandesAide as $demande) {
            DemandeAide::create($demande);
        }
    }
}

