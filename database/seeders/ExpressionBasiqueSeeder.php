<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpressionBasiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expressions_basiques')->insert([
            [
                'nom' => 'bonjour',
                'image' => null,
                'francais' => 'Bonjour',
                'goun' => 'Wézon',
                'fon' => 'Wézon',
                'yoruba' => 'Ẹ káàárọ̀',
                'dendi' => 'Fofo',
                'anglais' => 'Hello',
            ],
            [
                'nom' => 'merci beaucoup',
                'image' => null,
                'francais' => 'Merci beaucoup',
                'goun' => 'Akpè nú',
                'fon' => 'Akpè nú',
                'yoruba' => 'Ẹ ṣeun púpọ̀',
                'dendi' => 'Akpè nú',
                'anglais' => 'Thank you very much',
            ],
            [
                'nom' => 'à demain',
                'image' => null,
                'francais' => 'À demain',
                'goun' => 'Kù zɔ̀n',
                'fon' => 'Kù zɔ̀n',
                'yoruba' => 'Ó dàbọ̀ lọ́la',
                'dendi' => 'Kù zɔ̀n',
                'anglais' => 'See you tomorrow',
            ],
            [
                'nom' => 'comment vas-tu',
                'image' => null,
                'francais' => 'Comment vas-tu ?',
                'goun' => 'Nǔ wè ?',
                'fon' => 'Nǔ wè ?',
                'yoruba' => 'Báwo ni o ṣe wà ?',
                'dendi' => 'Nǔ wè ?',
                'anglais' => 'How are you?',
            ],
            [
                'nom' => 'à bientôt',
                'image' => null,
                'francais' => 'À bientôt',
                'goun' => 'Kù wá',
                'fon' => 'Kù wá',
                'yoruba' => 'Ó dàbọ̀ láìpẹ́',
                'dendi' => 'Kù wá',
                'anglais' => 'See you soon',
            ],
            [
                'nom' => 'ça va',
                'image' => null,
                'francais' => 'Ça va',
                'goun' => 'Nǔ wè',
                'fon' => 'Nǔ wè',
                'yoruba' => 'Ó dára',
                'dendi' => 'Nǔ wè',
                'anglais' => 'It\'s fine',
            ],
            [
                'nom' => 'pardon',
                'image' => null,
                'francais' => 'Pardon',
                'goun' => 'Ma lɛ',
                'fon' => 'Ma lɛ',
                'yoruba' => 'Dá bí',
                'dendi' => 'Ma lɛ',
                'anglais' => 'Sorry',
            ],
        ]);
    }
}
