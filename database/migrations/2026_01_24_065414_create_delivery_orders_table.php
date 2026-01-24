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
        Schema::create('delivery_orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('do_no')->nullable();
            $table->string('job_no',255)->nullable();
            $table->string('vessel',255)->nullable();
            $table->string('do_recepient', 255)->nullable();
            $table->string('location', 255)->nullable();
            $table->decimal('total',11,2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_orders');
    }
};
