<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProducersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producers')->insert([
            ['name' => 'Electrolux '],
            ['name' => 'Brastemp '],
            ['name' => 'Fischer '],
            ['name' => 'Samsung '],
            ['name' => 'LG']
        ]);
    }
}
