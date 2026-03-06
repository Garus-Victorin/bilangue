<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NombreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nombres')->insert([
            [
                'nombre'   => 1,
                'francais' => 'un',
                'goun'     => 'dé',
                'fon'      => 'dé',
                'yoruba'   => 'ọ̀kan',
                'dendi'    => 'foy',
                'anglais'  => 'one',
            ],
            [
                'nombre'   => 2,
                'francais' => 'deux',
                'goun'     => 'éwé',
                'fon'      => 'éwé',
                'yoruba'   => 'èjì',
                'dendi'    => 'hinka',
                'anglais'  => 'two',
            ],
            [
                'nombre'   => 3,
                'francais' => 'trois',
                'goun'     => 'étà',
                'fon'      => 'étà',
                'yoruba'   => 'ẹ̀ta',
                'dendi'    => 'hinka-foy',
                'anglais'  => 'three',
            ],
            [
                'nombre'   => 4,
                'francais' => 'quatre',
                'goun'     => 'énè',
                'fon'      => 'énè',
                'yoruba'   => 'ẹ̀rin',
                'dendi'    => 'foy-hinka',
                'anglais'  => 'four',
            ],
            [
                'nombre'   => 5,
                'francais' => 'cinq',
                'goun'     => 'énùn',
                'fon'      => 'énùn',
                'yoruba'   => 'àrùn',
                'dendi'    => 'hinku',
                'anglais'  => 'five',
            ],
        ]);
    }
}
