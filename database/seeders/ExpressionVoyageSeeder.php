<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExpressionVoyage;

class ExpressionVoyageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expressions = [
            [
                'francais' => 'Où est la gare ?',
                'goun' => 'Ayi kɔnɔ ga ?',
                'fon' => 'Afɔdji ɖɔ ɖe ?',
                'yoruba' => 'Nibo ni ibudo wa?',
                'dendi' => 'Gaar ɗoo ɗe ?',
                'anglais' => 'Where is the station?',
                'emoji' => '🚉',
            ],
            [
                'francais' => 'Combien coûte le billet ?',
                'goun' => 'Tikɛti sɔrɔ jɛn ?',
                'fon' => 'Tikɛti ɖɔ ɖe ?',
                'yoruba' => 'Elo ni tikẹti na?',
                'dendi' => 'Tikɛti ɗoo ɗe ?',
                'anglais' => 'How much is the ticket?',
                'emoji' => '💰',
            ],
            [
                'francais' => 'Je veux aller à…',
                'goun' => 'N bɛna taa…',
                'fon' => 'Un ɖɔ ɖe…',
                'yoruba' => 'Mo fẹ lọ si…',
                'dendi' => 'N ɗoo ɗe…',
                'anglais' => 'I want to go to…',
                'emoji' => '🚌',
            ],
            [
                'francais' => 'À quelle heure part le bus ?',
                'goun' => 'Bus bɛna kɔ waati jɛn ?',
                'fon' => 'Bus ɖɔ ɖe ?',
                'yoruba' => 'Akoko wo ni ọkọ akẹru naa maa lọ?',
                'dendi' => 'Bus ɗoo ɗe ?',
                'anglais' => 'What time does the bus leave?',
                'emoji' => '⏰',
            ],
            [
                'francais' => 'Pouvez-vous maider, sil vous plait ?',
                'goun' => 'I bɛna sɔrɔ n dɛmɛ wa ?',
                'fon' => 'Un ɖɔ ɖe ?',
                'yoruba' => 'Ṣe o le ran mi lọwọ, jọwọ?',
                'dendi' => 'I ɗoo ɗe ?',
                'anglais' => 'Can you help me, please?',
                'emoji' => '🆘',
            ],
            [
                'francais' => 'Je suis perdu',
                'goun' => 'N bɛna bɔ',
                'fon' => 'Un ɖɔ ɖe',
                'yoruba' => 'Mo ti ṣọna',
                'dendi' => 'N ɗoo ɗe',
                'anglais' => 'I am lost',
                'emoji' => '🗺️',
            ],
            [
                'francais' => 'Où se trouve lhotel ?',
                'goun' => 'Otɛli kɔnɔ ga ?',
                'fon' => 'Otɛli ɖɔ ɖe ?',
                'yoruba' => 'Nibo ni hotẹẹli wa?',
                'dendi' => 'Otɛli ɗoo ɗe ?',
                'anglais' => 'Where is the hotel?',
                'emoji' => '🏨',
            ],
            [
                'francais' => 'Merci pour votre aide',
                'goun' => 'Ani sɔrɔ i dɛmɛ',
                'fon' => 'Akpɛ ɖɔ ɖe',
                'yoruba' => 'O ṣeun fun iranlọwọ rẹ',
                'dendi' => 'Ani ɗoo ɗe',
                'anglais' => 'Thank you for your help',
                'emoji' => '🙏',
            ],
        ];

        foreach ($expressions as $expression) {
            ExpressionVoyage::create($expression);
        }
    }
}

