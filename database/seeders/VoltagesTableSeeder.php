<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoltagesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('voltages')->insert([
            ['volts' => 110],
            ['volts' => 220],
            ['volts' => 12]
        ]);
    }
}
