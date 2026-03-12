<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalutationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salutations')->insert([
            [
                'francais' => 'Bonjour',
                'anglais'  => 'Hello',
                'goun'     => 'Wézon',
                'fon'      => 'Wézon',
                'yoruba'   => 'Ẹ káàárọ̀',
                'dendi'    => 'Fofo',
                'bariba'   => 'Baani',
                'emoji'    => '👋',
            ],
            [
                'francais' => 'Bonsoir',
                'anglais'  => 'Good evening',
                'goun'     => 'Wézɔn zán',
                'fon'      => 'Wézɔn zán',
                'yoruba'   => 'Ẹ káalẹ́',
                'dendi'    => 'Fofo zaan',
                'bariba'   => 'Baani zaan',
                'emoji'    => '🌙',
            ],
            [
                'francais' => 'Bienvenue',
                'anglais'  => 'Welcome',
                'goun'     => 'Wá wá',
                'fon'      => 'Wá wá',
                'yoruba'   => 'Ẹ kú àbọ̀',
                'dendi'    => 'Fofo kɔ',
                'bariba'   => 'Baani wa',
                'emoji'    => '🏠',
            ],
            [
                'francais' => 'Au revoir',
                'anglais'  => 'Goodbye',
                'goun'     => 'Kù dó',
                'fon'      => 'Kù dó',
                'yoruba'   => 'Ó dàbọ̀',
                'dendi'    => 'Fofo bɔ',
                'bariba'   => 'Baani bɔ',
                'emoji'    => '👋',
            ],
            [
                'francais' => 'Bonne journée',
                'anglais'  => 'Have a nice day',
                'goun'     => 'Zɔ̀n nú',
                'fon'      => 'Zɔ̀n nú',
                'yoruba'   => 'Ẹ kú ọjọ́',
                'dendi'    => 'Fofo zɔn',
                'bariba'   => 'Baani zɔn',
                'emoji'    => '☀️',
            ],
        ]);
    }
}
