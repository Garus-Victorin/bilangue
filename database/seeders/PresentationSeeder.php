<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Presentation;

class PresentationSeeder extends Seeder
{
    public function run(): void
    {
        $presentations = [
            [
                'presentation' => 'Je mappelle…',
                'francais' => 'Je mappelle…',
                'goun' => 'Mi yɔ…',
                'fon' => 'Un na ɖɔ…',
                'yoruba' => 'Orúkọ mi ni…',
                'dendi' => 'Mi yɔ…',
                'anglais' => 'My name is…',
                'emoji' => '👋',
            ],
            [
                'presentation' => 'Comment tu tappelles ?',
                'francais' => 'Comment tu tappelles ?',
                'goun' => 'A yɔ dɛ ?',
                'fon' => 'A na ɖɔ dɛ ?',
                'yoruba' => 'Kí ni orúkọ rẹ ?',
                'dendi' => 'A yɔ dɛ ?',
                'anglais' => 'What is your name?',
                'emoji' => '❓',
            ],
            [
                'presentation' => 'Je suis développeur',
                'francais' => 'Je suis développeur',
                'goun' => 'Mi yɔ dɛvlɔpɔ',
                'fon' => 'Un yɔ dɛvlɔpɔ',
                'yoruba' => 'Èmi jẹ́ òǹgbàágbọ̀',
                'dendi' => 'Mi yɔ dɛvlɔpɔ',
                'anglais' => 'I am a developer',
                'emoji' => '💻',
            ],
            [
                'presentation' => 'Je viens du Bénin',
                'francais' => 'Je viens du Bénin',
                'goun' => 'Mi wá tɔ Bɛnin',
                'fon' => 'Un wá tɔ Bɛnin',
                'yoruba' => 'Mo wá láti Bẹ̀nẹ̀',
                'dendi' => 'Mi wá tɔ Bɛnin',
                'anglais' => 'I come from Benin',
                'emoji' => '🌍',
            ],
            [
                'presentation' => 'Enchanté de te rencontrer',
                'francais' => 'Enchanté de te rencontrer',
                'goun' => 'Mi sú dɔ a',
                'fon' => 'Un sú dɔ a',
                'yoruba' => 'Inú mi dùn láti pàdé rẹ',
                'dendi' => 'Mi sú dɔ a',
                'anglais' => 'Nice to meet you',
                'emoji' => '😊',
            ],
            [
                'presentation' => 'Permets-moi de me présenter',
                'francais' => 'Permets-moi de me présenter',
                'goun' => 'Na mi na mi kpɔn',
                'fon' => 'Na un na un kpɔn',
                'yoruba' => 'Jẹ́ kí n ṣe àfihàn ara mi',
                'dendi' => 'Na mi na mi kpɔn',
                'anglais' => 'Let me introduce myself',
                'emoji' => '🙋',
            ],
        ];

        foreach ($presentations as $presentation) {
            Presentation::create($presentation);
        }
    }
}

