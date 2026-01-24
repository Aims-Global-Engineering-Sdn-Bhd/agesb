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
        Schema::create('purchase_requests', function (Blueprint $table) {
            $table->id();
            $table->string('pr_no',33)->nullable();
            $table->dateTime('date')->nullable();
            $table->string('item_req',33)->nullable();
            $table->string('vessel',33)->nullable();
            $table->string('status', 33)->nullable();

            //Foreign Key
            $table->foreignId('requested_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('requested_at')->nullable();

            $table->foreignId('confirmed_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('confirmed_at')->nullable();
            $table->string('confirmed_status',33)->nullable();

            $table->foreignId('approved_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('approved_at')->nullable();
            $table->string('approved_status',33)->nullable();

            $table->foreignId('pro_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('pro_at')->nullable();
            $table->string('pro_status',33)->nullable();
            $table->string('pro_remark',255)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_requests');
    }
};
