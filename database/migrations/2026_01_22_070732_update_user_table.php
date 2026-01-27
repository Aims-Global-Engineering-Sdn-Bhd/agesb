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
        Schema::table('users', function (Blueprint $table) {
            $table->string('staff_no',33)->nullable();
            $table->string('noic',60)->nullable();
            $table->string('address',255)->nullable();
            $table->string('position', 60)->nullable();
            $table->string('role', 60)->nullable();
            $table->string('department', 60)->nullable();
            $table->string('company',60)->nullable();
            $table->string('branch', 60)->nullable();
            $table->string('status', 60)->nullable();
            $table->string('marital', 60)->nullable();
            $table->string('gender', 60)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
