<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This adds the missing contact_number column for Alexas Engineering.
     */
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Adds the column after the 'name' column
            $table->string('contact_number')->after('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('contact_number');
        });
    }
};