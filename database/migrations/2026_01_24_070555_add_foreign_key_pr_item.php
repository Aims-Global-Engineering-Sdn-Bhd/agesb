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
        Schema::table('pr_items', function (Blueprint $table) {
            $table->integer('quantity_pro')->nullable();
            $table->decimal('unit_price',11,2)->nullable();
            $table->decimal('total_price',11,2)->nullable();
            $table->foreignId('do_id')
                ->nullable()
                ->constrained('delivery_orders')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pr_items', function (Blueprint $table) {
            //
        });
    }
};
