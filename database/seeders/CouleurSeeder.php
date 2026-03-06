<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouleurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('couleurs')->insert([
            [
                'couleur'  => 'rouge',
                'francais' => 'Rouge',
                'goun'     => 'Wɛ̀wɛ',
                'fon'      => 'Wɛ̀wɛ',
                'yoruba'   => 'Pupa',
                'dendi'    => 'Kɔrɔ',
                'anglais'  => 'Red',
            ],
            [
                'couleur'  => 'bleu',
                'francais' => 'Bleu',
                'goun'     => 'Sinsɛn',
                'fon'      => 'Sinsɛn',
                'yoruba'   => 'Búlúù',
                'dendi'    => 'Bulu',
                'anglais'  => 'Blue',
            ],
            [
                'couleur'  => 'vert',
                'francais' => 'Vert',
                'goun'     => 'Wɛ̀lɛ',
                'fon'      => 'Wɛ̀lɛ',
                'yoruba'   => 'Àwọ̀ ewé',
                'dendi'    => 'Kɔrɔ wɛ',
                'anglais'  => 'Green',
            ],
            [
                'couleur'  => 'jaune',
                'francais' => 'Jaune',
                'goun'     => 'Sɛ̀nsɛ̀n',
                'fon'      => 'Sɛ̀nsɛ̀n',
                'yoruba'   => 'Àwọ̀ ofeefee',
                'dendi'    => 'Sɛ̀n',
                'anglais'  => 'Yellow',
            ],
            [
                'couleur'  => 'noir',
                'francais' => 'Noir',
                'goun'     => 'Zùn',
                'fon'      => 'Zùn',
                'yoruba'   => 'Dúdú',
                'dendi'    => 'Dibi',
                'anglais'  => 'Black',
            ],
            [
                'couleur'  => 'blanc',
                'francais' => 'Blanc',
                'goun'     => 'Wɛ̀',
                'fon'      => 'Wɛ̀',
                'yoruba'   => 'Funfun',
                'dendi'    => 'Fɔ̀',
                'anglais'  => 'White',
            ],
        ]);
    }
}
