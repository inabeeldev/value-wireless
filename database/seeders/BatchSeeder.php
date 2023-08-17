<?php

namespace Database\Seeders;

use App\Models\Batch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Batch::create([
            'batch_no' => 'AB123',
            'paid' => 5500,
            'comment' => 'All iphone 11 pro',
            'supplier_id' => 1,
            'warehouse_id' => 2,
        ]);
        Batch::create([
            'batch_no' => 'AB444',
            'paid' => 9500,
            'comment' => 'All iphone 13 pro',
            'supplier_id' => 2,
            'warehouse_id' => 3,
        ]);
        Batch::create([
            'batch_no' => 'AB999',
            'paid' => 8900,
            'comment' => 'All iphone 14 pro',
            'supplier_id' => 1,
            'warehouse_id' => 1,
        ]);
        Batch::create([
            'batch_no' => 'AB778',
            'paid' => 11500,
            'comment' => 'All iphone 13 pro',
            'supplier_id' => 1,
            'warehouse_id' => 2,
        ]);
        Batch::create([
            'batch_no' => 'AB354',
            'paid' => 9850,
            'comment' => 'All iphone 11 pro',
            'supplier_id' => 2,
            'warehouse_id' => 1,
        ]);
        Batch::create([
            'batch_no' => 'AB852',
            'paid' => 3560,
            'comment' => 'All iphone X max',
            'supplier_id' => 2,
            'warehouse_id' => 2,
        ]);
        Batch::create([
            'batch_no' => 'AB114',
            'paid' => 6950,
            'comment' => 'All iphone 12 plus',
            'supplier_id' => 2,
            'warehouse_id' => 1,
        ]);
    }
}
