<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('locations')->insert([
            [
            'name' => 'Heathrow',
            'type_id' => 2,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '4',
            'charge' => '4',
            ],
            [
            'name' => 'kigali',
            'type_id' => 3,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '4',
            'charge' => '4',
            ],
            [
            'name' => 'NYabugogo',
            'type_id' => 4,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '2',
            'charge' => '4',
            ],
            [
            'name' => 'kabuga',
            'type_id' => 1,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '2',
            'charge' => '4',
            ],
            [
            'name' => 'remera',
            'type_id' => 2,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '1',
            'charge' => '4',
            ],
            [
            'name' => 'kacyiru',
            'type_id' => 3,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '4',
            'charge' => '4',
            ],
            [
            'name' => 'ruhango',
            'type_id' => 4,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '1',
            'charge' => '4',
            ],
            [
            'name' => 'buhoro',
            'type_id' => 3,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '4',
            'charge' => '4',
            ],
            [
            'name' => 'Kivumbi',
            'type_id' => 1,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '3',
            'charge' => '4',
            ],
            [
            'name' => 'kansi',
            'type_id' => 2,
            'address' => 'Ns0183aa',
            'code' => 'code',
            'zone_id' => '4',
            'charge' => '4',
            ],
        ]);
    }
}
