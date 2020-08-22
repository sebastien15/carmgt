<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->insert([
            [
            'name' => 'Heathrow',
            'post_code' => 'Ns0183aa',
            ],
            [
            'name' => 'London',
            'post_code' => 'AA23NS',
            ],
            [
            'name' => 'Liverpool',
            'post_code' => 'NSS10AA',
            ],
            [
            'name' => 'Manchester',
            'post_code' => 'NA17AA',
            ],
        ]);
    }
}
