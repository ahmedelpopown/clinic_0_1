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
            $table->boolean('is_Manager')->default(false);
            $table->boolean('is_Admin')->default(false);
            $table->boolean('is_Doctor')->default(false);
            $table->boolean('is_Patient')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_Manager');
            $table->dropColumn('is_Admin');
            $table->dropColumn('is_Doctor');
            $table->dropColumn('is_Patient');
        });
    }
};
