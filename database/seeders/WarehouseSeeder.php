<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warehouse::create([
            'name' => 'Lahore',
            'location' => 'Hafeez center, Lahore',
        ]);
        Warehouse::create([
            'name' => 'Dubai',
            'location' => 'Sheikh Hamdan street, Dubai',
        ]);
        Warehouse::create([
            'name' => 'California',
            'location' => '165 suite, California',
        ]);
    }
}
