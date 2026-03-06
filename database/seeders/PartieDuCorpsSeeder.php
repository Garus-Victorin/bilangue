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
            ],
            [
                'nom' => 'Yeux',
                'francais' => 'Yeux',
                'goun' => 'Nyen',
                'fon' => 'Ado',
                'yoruba' => 'Oju',
                'dendi' => 'Nyen',
                'anglais' => 'Eyes',
            ],
            [
                'nom' => 'Nez',
                'francais' => 'Nez',
                'goun' => 'Nyon',
                'fon' => 'Nyon',
                'yoruba' => 'Imu',
                'dendi' => 'Nyon',
                'anglais' => 'Nose',
            ],
            [
                'nom' => 'Bouche',
                'francais' => 'Bouche',
                'goun' => 'Nu',
                'fon' => 'Nu',
                'yoruba' => 'Enu',
                'dendi' => 'Nu',
                'anglais' => 'Mouth',
            ],
            [
                'nom' => 'Oreilles',
                'francais' => 'Oreilles',
                'goun' => 'Toli',
                'fon' => 'Toli',
                'yoruba' => 'Eti',
                'dendi' => 'Toli',
                'anglais' => 'Ears',
            ],
            [
                'nom' => 'Bras',
                'francais' => 'Bras',
                'goun' => 'Woli',
                'fon' => 'Aba',
                'yoruba' => 'Apa',
                'dendi' => 'Woli',
                'anglais' => 'Arms',
            ],
            [
                'nom' => 'Main',
                'francais' => 'Main',
                'goun' => 'Nu',
                'fon' => 'Aso',
                'yoruba' => 'Owo',
                'dendi' => 'Nu',
                'anglais' => 'Hand',
            ],
            [
                'nom' => 'Doigts',
                'francais' => 'Doigts',
                'goun' => 'Nusi',
                'fon' => 'Asosi',
                'yoruba' => 'Ika',
                'dendi' => 'Nusi',
                'anglais' => 'Fingers',
            ],
            [
                'nom' => 'Jambes',
                'francais' => 'Jambes',
                'goun' => 'Koli',
                'fon' => 'Afan',
                'yoruba' => 'Ese',
                'dendi' => 'Koli',
                'anglais' => 'Legs',
            ],
            [
                'nom' => 'Pieds',
                'francais' => 'Pieds',
                'goun' => 'Afi',
                'fon' => 'Afan',
                'yoruba' => 'Ese',
                'dendi' => 'Afi',
                'anglais' => 'Feet',
            ],
        ];

        foreach ($partiesCorps as $partie) {
            PartieDuCorps::create($partie);
        }
    }
}
