<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            [
            'vehicle_type' => 'Maserati',
            'noofpassenger' => '3',
            'noofsuitecases' => '5',
            'handluggage' => '7',
            'noofmiles' => '6',
            'startrate' => '4.66',
            'fImage' => 'Ns0183aa',
            'tColor' => 'Ns0183aa',
            'bgColor' => 'Ns0183aa',
            ],
            [
            'vehicle_type' => 'Sallon',
            'noofpassenger' => '6',
            'noofsuitecases' => '3',
            'handluggage' => '5',
            'noofmiles' => '2',
            'startrate' => '5.33',
            'fImage' => 'Ns0183aa',
            'tColor' => 'Ns0183aa',
            'bgColor' => 'Ns0183aa',
            ],
            [
            'vehicle_type' => 'Buggati veron',
            'noofpassenger' => '8',
            'noofsuitecases' => '3',
            'handluggage' => '12',
            'noofmiles' => '9',
            'startrate' => '2.54',
            'fImage' => 'Ns0183aa',
            'tColor' => 'Ns0183aa',
            'bgColor' => 'Ns0183aa',
            ],
            [
            'vehicle_type' => 'Toyota',
            'noofpassenger' => '7',
            'noofsuitecases' => '4',
            'handluggage' => '2',
            'noofmiles' => '2',
            'startrate' => '6',
            'fImage' => 'Ns0183aa',
            'tColor' => 'Ns0183aa',
            'bgColor' => 'Ns0183aa',
            ],
            [
            'vehicle_type' => 'Benz',
            'noofpassenger' => '5',
            'noofsuitecases' => '6',
            'handluggage' => '7',
            'noofmiles' => '9',
            'startrate' => '9',
            'fImage' => 'Ns0183aa',
            'tColor' => 'Ns0183aa',
            'bgColor' => 'Ns0183aa',
            ],            
        ]);
    }
}
