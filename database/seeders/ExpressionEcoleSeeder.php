<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpressionEcole;

class ExpressionEcoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expressions = [
            [
                'francais' => 'Bonjour professeur',
                'goun' => 'Goun translation for Bonjour professeur',
                'fon' => 'Fon translation for Bonjour professeur',
                'yoruba' => 'Yoruba translation for Bonjour professeur',
                'dendi' => 'Dendi translation for Bonjour professeur',
                'anglais' => 'Good morning teacher',
                'emoji' => '👋',
            ],
            [
                'francais' => 'S\'il vous plaît, puis-je entrer ?',
                'goun' => 'Goun translation for S\'il vous plaît, puis-je entrer ?',
                'fon' => 'Fon translation for S\'il vous plaît, puis-je entrer ?',
                'yoruba' => 'Yoruba translation for S\'il vous plaît, puis-je entrer ?',
                'dendi' => 'Dendi translation for S\'il vous plaît, puis-je entrer ?',
                'anglais' => 'Please, may I come in?',
                'emoji' => '🚪',
            ],
            [
                'francais' => 'Je n\'ai pas compris',
                'goun' => 'Goun translation for Je n\'ai pas compris',
                'fon' => 'Fon translation for Je n\'ai pas compris',
                'yoruba' => 'Yoruba translation for Je n\'ai pas compris',
                'dendi' => 'Dendi translation for Je n\'ai pas compris',
                'anglais' => 'I didn\'t understand',
                'emoji' => '🤔',
            ],
            [
                'francais' => 'Pouvez-vous répéter, s\'il vous plaît ?',
                'goun' => 'Goun translation for Pouvez-vous répéter, s\'il vous plaît ?',
                'fon' => 'Fon translation for Pouvez-vous répéter, s\'il vous plaît ?',
                'yoruba' => 'Yoruba translation for Pouvez-vous répéter, s\'il vous plaît ?',
                'dendi' => 'Dendi translation for Pouvez-vous répéter, s\'il vous plaît ?',
                'anglais' => 'Can you repeat, please?',
                'emoji' => '🔁',
            ],
            [
                'francais' => 'J\'ai fini mon exercice',
                'goun' => 'Goun translation for J\'ai fini mon exercice',
                'fon' => 'Fon translation for J\'ai fini mon exercice',
                'yoruba' => 'Yoruba translation for J\'ai fini mon exercice',
                'dendi' => 'Dendi translation for J\'ai fini mon exercice',
                'anglais' => 'I finished my exercise',
                'emoji' => '✅',
            ],
            [
                'francais' => 'Puis-je sortir ?',
                'goun' => 'Goun translation for Puis-je sortir ?',
                'fon' => 'Fon translation for Puis-je sortir ?',
                'yoruba' => 'Yoruba translation for Puis-je sortir ?',
                'dendi' => 'Dendi translation for Puis-je sortir ?',
                'anglais' => 'May I go out?',
                'emoji' => '🚶',
            ],
            [
                'francais' => 'Je suis en retard',
                'goun' => 'Goun translation for Je suis en retard',
                'fon' => 'Fon translation for Je suis en retard',
                'yoruba' => 'Yoruba translation for Je suis en retard',
                'dendi' => 'Dendi translation for Je suis en retard',
                'anglais' => 'I am late',
                'emoji' => '⏰',
            ],
            [
                'francais' => 'Merci beaucoup, professeur',
                'goun' => 'Goun translation for Merci beaucoup, professeur',
                'fon' => 'Fon translation for Merci beaucoup, professeur',
                'yoruba' => 'Yoruba translation for Merci beaucoup, professeur',
                'dendi' => 'Dendi translation for Merci beaucoup, professeur',
                'anglais' => 'Thank you very much, teacher',
                'emoji' => '🙏',
            ],
        ];

        foreach ($expressions as $expression) {
            ExpressionEcole::create($expression);
        }
    }
}
