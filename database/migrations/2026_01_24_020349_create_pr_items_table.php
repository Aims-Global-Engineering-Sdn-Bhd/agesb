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
        Schema::create('pr_items', function (Blueprint $table) {
            $table->id();
            //Foreign Key
            $table->foreignId('pr_id')
                ->nullable()
                ->constrained('purchase_requests')
                ->nullOnDelete();

            $table->string('description',255)->nullable();
            $table->string('unit',33)->nullable();
            $table->string('remark',255)->nullable();
            $table->string('status',33)->nullable();
            $table->string('doc_url',255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pr_items');
    }
};
