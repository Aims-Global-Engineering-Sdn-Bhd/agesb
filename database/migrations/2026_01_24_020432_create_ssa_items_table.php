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
        Schema::create('ssa_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Foreign key
            $table->foreignId('ssa_id')
                ->nullable()
                ->constrained('ssas')
                ->nullOnDelete();

            $table->string('description', 255)->nullable();
            $table->string('model_no', 255)->nullable();
            $table->string('remedial', 255)->nullable();
            $table->string('assistance', 255)->nullable();
            $table->string('remark', 255)->nullable();
            $table->string('doc_url', 255)->nullable();
            $table->string('status', 33)->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ssa_items');
    }
};
