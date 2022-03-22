<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            [
            'name' => 'Sutrisno',
            'address' => 'Malang,Jawa Timur',
            'phone_number' => '08123456',
            'gender' => 'Male'
            ],
            [
            'name' => 'Anselma',
            'address' => 'Bandung,Jawa Barat',
            'phone_number' => '08123457',
            'gender' => 'Female'
            ],
            [
            'name' => 'Mamat',
            'address' => 'Malang,Jawa Timur',
            'phone_number' => '08123458',
            'gender' => 'Male'
            ],

        ]);
    }
}
