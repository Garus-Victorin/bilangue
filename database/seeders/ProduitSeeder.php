<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produits = [
            [
                'francais' => 'Riz',
                'goun' => 'Mali',
                'fon' => 'Mali',
                'yoruba' => 'Iresi',
                'dendi' => 'Shinkafa',
                'anglais' => 'Rice',
            ],
            [
                'francais' => 'Maïs',
                'goun' => 'Koko',
                'fon' => 'Agbado',
                'yoruba' => 'Agbado',
                'dendi' => 'Masara',
                'anglais' => 'Corn',
            ],
            [
                'francais' => 'Haricot',
                'goun' => 'Awinsa',
                'fon' => 'Ewa',
                'yoruba' => 'Ewa',
                'dendi' => 'Wake',
                'anglais' => 'Beans',
            ],
            [
                'francais' => 'Huile',
                'goun' => 'Ami',
                'fon' => 'Ami',
                'yoruba' => 'Epo',
                'dendi' => 'Mai',
                'anglais' => 'Oil',
            ],
            [
                'francais' => 'Sel',
                'goun' => 'Sika',
                'fon' => 'Yinyin',
                'yoruba' => 'Iyọ',
                'dendi' => 'Gishiri',
                'anglais' => 'Salt',
            ],
            [
                'francais' => 'Sucre',
                'goun' => 'Sukali',
                'fon' => 'Sukali',
                'yoruba' => 'Sukari',
                'dendi' => 'Sukari',
                'anglais' => 'Sugar',
            ],
            [
                'francais' => 'Piment',
                'goun' => 'Taka',
                'fon' => 'Taka',
                'yoruba' => 'Ata',
                'dendi' => 'Barkono',
                'anglais' => 'Pepper',
            ],
            [
                'francais' => 'Tomate',
                'goun' => 'Timati',
                'fon' => 'Timati',
                'yoruba' => 'Timati',
                'dendi' => 'Timatar',
                'anglais' => 'Tomato',
            ],
            [
                'francais' => 'Oignon',
                'goun' => 'Alubosa',
                'fon' => 'Alubosa',
                'yoruba' => 'Alubosa',
                'dendi' => 'Albasa',
                'anglais' => 'Onion',
            ],
            [
                'francais' => 'Poisson',
                'goun' => 'Hùn',
                'fon' => 'Hùn',
                'yoruba' => 'Ẹja',
                'dendi' => 'Kifi',
                'anglais' => 'Fish',
            ],
            [
                'francais' => 'Viande',
                'goun' => 'Ẹran',
                'fon' => 'Ẹran',
                'yoruba' => 'Ẹran',
                'dendi' => 'Nama',
                'anglais' => 'Meat',
            ],
            [
                'francais' => 'Pain',
                'goun' => 'Búrẹdi',
                'fon' => 'Búrẹdi',
                'yoruba' => 'Búrẹdi',
                'dendi' => 'Burodi',
                'anglais' => 'Bread',
            ],
            [
                'francais' => 'Lait',
                'goun' => 'Wara',
                'fon' => 'Wara',
                'yoruba' => 'Wara',
                'dendi' => 'Madara',
                'anglais' => 'Milk',
            ],
            [
                'francais' => 'Beurre',
                'goun' => 'Bọta',
                'fon' => 'Bọta',
                'yoruba' => 'Bọta',
                'dendi' => 'Bata',
                'anglais' => 'Butter',
            ],
            [
                'francais' => 'Œufs',
                'goun' => 'Ẹyin',
                'fon' => 'Ẹyin',
                'yoruba' => 'Ẹyin',
                'dendi' => 'Kwai',
                'anglais' => 'Eggs',
            ],
        ];

        foreach ($produits as $produit) {
            \App\Models\Produit::create($produit);
        }
    }
}
