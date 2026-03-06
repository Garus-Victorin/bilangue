<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpressionMaison;

class ExpressionMaisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expressions = [
            [
                'francais' => 'Bonjour maman',
                'goun' => 'Mi sú dɔ nɔ',
                'fon' => 'Un sú dɔ nɔ',
                'yoruba' => 'Ẹ káàrọ̀ màmá',
                'dendi' => 'Mi sú dɔ nɔ',
                'anglais' => 'Good morning mom',
            ],
            [
                'francais' => 'J\'ai faim',
                'goun' => 'Mi wú',
                'fon' => 'Un wú',
                'yoruba' => 'Ẹbi ń pa mí',
                'dendi' => 'Mi wú',
                'anglais' => 'I am hungry',
            ],
            [
                'francais' => 'J\'ai soif',
                'goun' => 'Mi wú nú',
                'fon' => 'Un wú nú',
                'yoruba' => 'Ọ̀nà ń gbẹ mí',
                'dendi' => 'Mi wú nú',
                'anglais' => 'I am thirsty',
            ],
            [
                'francais' => 'Où est papa ?',
                'goun' => 'Papa yɔ dɛ ?',
                'fon' => 'Papa yɔ dɛ ?',
                'yoruba' => 'Níbo ni bàbá wà?',
                'dendi' => 'Papa yɔ dɛ ?',
                'anglais' => 'Where is dad?',
            ],
            [
                'francais' => 'Je vais sortir',
                'goun' => 'Mi na wá',
                'fon' => 'Un na wá',
                'yoruba' => 'Èmi yóò jáde',
                'dendi' => 'Mi na wá',
                'anglais' => 'I am going out',
            ],
            [
                'francais' => 'Aide-moi, s\'il te plaît',
                'goun' => 'Na mi kpɔn',
                'fon' => 'Na un kpɔn',
                'yoruba' => 'Ràn mí lọ́wọ́, jọ̀wọ́',
                'dendi' => 'Na mi kpɔn',
                'anglais' => 'Help me, please',
            ],
            [
                'francais' => 'J\'ai fini de manger',
                'goun' => 'Mi xwé nú',
                'fon' => 'Un xwé nú',
                'yoruba' => 'Mo ti jẹun tán',
                'dendi' => 'Mi xwé nú',
                'anglais' => 'I finished eating',
            ],
            [
                'francais' => 'Bonne nuit',
                'goun' => 'Mi sú dɔ',
                'fon' => 'Un sú dɔ',
                'yoruba' => 'Ẹ̀ṣẹ̀rẹ̀',
                'dendi' => 'Mi sú dɔ',
                'anglais' => 'Good night',
            ],
        ];

        foreach ($expressions as $expression) {
            ExpressionMaison::create($expression);
        }
    }
}
