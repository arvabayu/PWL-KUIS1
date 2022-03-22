<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'name' => 'Es Teh',
                'price' => 5000,
                'category' => 'beverage'
            ],
            [
                'name' => 'Es Jeruk',
                'price' => 6000,
                'category' => 'beverage'
            ],
            [
                'name' => 'Nasi Goreng',
                'price' => 10000,
                'category' => 'food'
            ],
        ]);
    }
}
