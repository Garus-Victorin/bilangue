<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PartieDuCorps;

class PartieDuCorpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partiesCorps = [
            [
                'nom' => 'Tête',
                'francais' => 'Tête',
                'goun' => 'Ta',
                'fon' => 'Ta',
                'yoruba' => 'Ori',
                'dendi' => 'Ta',
                'anglais' => 'Head',
                'emoji' => '🗣️',
            ],
            [
                'nom' => 'Yeux',
                'francais' => 'Yeux',
                'goun' => 'Nyen',
                'fon' => 'Ado',
                'yoruba' => 'Oju',
                'dendi' => 'Nyen',
                'anglais' => 'Eyes',
                'emoji' => '👀',
            ],
            [
                'nom' => 'Nez',
                'francais' => 'Nez',
                'goun' => 'Nyon',
                'fon' => 'Nyon',
                'yoruba' => 'Imu',
                'dendi' => 'Nyon',
                'anglais' => 'Nose',
                'emoji' => '👃',
            ],
            [
                'nom' => 'Bouche',
                'francais' => 'Bouche',
                'goun' => 'Nu',
                'fon' => 'Nu',
                'yoruba' => 'Enu',
                'dendi' => 'Nu',
                'anglais' => 'Mouth',
                'emoji' => '👄',
            ],
            [
                'nom' => 'Oreilles',
                'francais' => 'Oreilles',
                'goun' => 'Toli',
                'fon' => 'Toli',
                'yoruba' => 'Eti',
                'dendi' => 'Toli',
                'anglais' => 'Ears',
                'emoji' => '👂',
            ],
            [
                'nom' => 'Bras',
                'francais' => 'Bras',
                'goun' => 'Woli',
                'fon' => 'Aba',
                'yoruba' => 'Apa',
                'dendi' => 'Woli',
                'anglais' => 'Arms',
                'emoji' => '💪',
            ],
            [
                'nom' => 'Main',
                'francais' => 'Main',
                'goun' => 'Nu',
                'fon' => 'Aso',
                'yoruba' => 'Owo',
                'dendi' => 'Nu',
                'anglais' => 'Hand',
                'emoji' => '✋',
            ],
            [
                'nom' => 'Doigts',
                'francais' => 'Doigts',
                'goun' => 'Nusi',
                'fon' => 'Asosi',
                'yoruba' => 'Ika',
                'dendi' => 'Nusi',
                'anglais' => 'Fingers',
                'emoji' => '🖐️',
            ],
            [
                'nom' => 'Jambes',
                'francais' => 'Jambes',
                'goun' => 'Koli',
                'fon' => 'Afan',
                'yoruba' => 'Ese',
                'dendi' => 'Koli',
                'anglais' => 'Legs',
                'emoji' => '🦵',
            ],
            [
                'nom' => 'Pieds',
                'francais' => 'Pieds',
                'goun' => 'Afi',
                'fon' => 'Afan',
                'yoruba' => 'Ese',
                'dendi' => 'Afi',
                'anglais' => 'Feet',
                'emoji' => '🦶',
            ],
        ];

        foreach ($partiesCorps as $partie) {
            PartieDuCorps::create($partie);
        }
    }
}
