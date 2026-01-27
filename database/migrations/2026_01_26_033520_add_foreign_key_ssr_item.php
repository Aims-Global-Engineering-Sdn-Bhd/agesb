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
        Schema::table('ssr_items', function (Blueprint $table) {
            $table->unsignedBigInteger('ssr_id')->nullable()->change();

            $table->foreign('ssr_id')
                ->references('id')
                ->on('ssrs')
                ->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ssr_items', function (Blueprint $table) {
            //
        });
    }
};
