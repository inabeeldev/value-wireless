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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('batch_no');
            $table->bigInteger('paid');
            $table->mediumText('comment');
            $table->foreignId('supplier_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

        // Define the foreign key constraint for warehouse_id with cascade options
            $table->foreignId('warehouse_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('user_id')->constrained();
            $table->enum('status', ['enable', 'disable'])->default('disable');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
