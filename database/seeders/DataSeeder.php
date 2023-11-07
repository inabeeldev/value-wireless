<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Gb;
use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::create([
            'name' => 'Blue'
        ]);
        Color::create([
            'name' => 'Black'
        ]);
        Color::create([
            'name' => 'Green'
        ]);
        Manufacturer::create([
            'name' => 'Apple'
        ]);
        Manufacturer::create([
            'name' => 'Samsung'
        ]);
        Manufacturer::create([
            'name' => 'Vivo'
        ]);
        Gb::create([
            'name' => '128'
        ]);
        Gb::create([
            'name' => '256'
        ]);
        Gb::create([
            'name' => '512'
        ]);
    }
}
