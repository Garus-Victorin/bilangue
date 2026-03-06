<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhraseBasiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phrases = [
            [
                'phrase' => 'je viens déjà',
                'francais' => 'je viens déjà',
                'goun' => 'mi wa kɔn',
                'fon' => 'un dɔ xɔ',
                'yoruba' => 'mo ti wa',
                'dendi' => 'ayi naa',
                'anglais' => 'I am coming already',
            ],
            [
                'phrase' => 'je te connais',
                'francais' => 'je te connais',
                'goun' => 'mi mɔ wɛ',
                'fon' => 'un mɔ wɛ',
                'yoruba' => 'mo mọ ọ',
                'dendi' => 'ayi mɔ wɛ',
                'anglais' => 'I know you',
            ],
            [
                'phrase' => 'j’ai faim',
                'francais' => 'j’ai faim',
                'goun' => 'mi dɔ',
                'fon' => 'un dɔ',
                'yoruba' => 'ebi n pa mi',
                'dendi' => 'ayi dɔ',
                'anglais' => 'I am hungry',
            ],
            [
                'phrase' => 'j’ai froid',
                'francais' => 'j’ai froid',
                'goun' => 'mi kɔn',
                'fon' => 'un kɔn',
                'yoruba' => 'otutu n pa mi',
                'dendi' => 'ayi kɔn',
                'anglais' => 'I am cold',
            ],
            [
                'phrase' => 'bonjour',
                'francais' => 'bonjour',
                'goun' => 'kɔn',
                'fon' => 'kɔn',
                'yoruba' => 'e kaaro',
                'dendi' => 'kɔn',
                'anglais' => 'good morning',
            ],
            [
                'phrase' => 'au revoir',
                'francais' => 'au revoir',
                'goun' => 'kɔn',
                'fon' => 'kɔn',
                'yoruba' => 'o daaro',
                'dendi' => 'kɔn',
                'anglais' => 'goodbye',
            ],
            [
                'phrase' => 'merci',
                'francais' => 'merci',
                'goun' => 'akpɛ',
                'fon' => 'akpɛ',
                'yoruba' => 'e se',
                'dendi' => 'akpɛ',
                'anglais' => 'thank you',
            ],
            [
                'phrase' => 's’il vous plaît',
                'francais' => 's’il vous plaît',
                'goun' => 'dɔ',
                'fon' => 'dɔ',
                'yoruba' => 'jowo',
                'dendi' => 'dɔ',
                'anglais' => 'please',
            ],
        ];

        foreach ($phrases as $phrase) {
            \App\Models\PhraseBasique::create($phrase);
        }
    }
}
