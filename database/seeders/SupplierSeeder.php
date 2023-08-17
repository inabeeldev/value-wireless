<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => 'Nabeel',
            'email' => 'nabeel@supplier.com',
            'phone' => '923046033244',
        ]);
        Supplier::create([
            'name' => 'Faraz',
            'email' => 'faraz@supplier.com',
            'phone' => '923053533366',
        ]);
    }
}
