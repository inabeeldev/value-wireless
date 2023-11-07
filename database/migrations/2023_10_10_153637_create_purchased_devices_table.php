<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchased_devices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('manufacturer_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('device_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

        // Define the foreign key constraint for warehouse_id with cascade options
            $table->foreignId('grade_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('gb_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('color_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->decimal('purchase_price', 10, 2);
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchased_devices');
    }
};
