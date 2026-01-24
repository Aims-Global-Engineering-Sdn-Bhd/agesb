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
        Schema::create('ssr_items', function (Blueprint $table) {
            $table->id();
            $table->integer('ssr_id')->nullable();
            $table->string('description',255)->nullable();
            $table->integer('quantity_req');
            $table->integer('balance');
            $table->integer('quantity_app');
            $table->string('impa_code',255)->nullable();
            $table->string('remark',255)->nullable();
            $table->string('status',33)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ssr_items');
    }
};
