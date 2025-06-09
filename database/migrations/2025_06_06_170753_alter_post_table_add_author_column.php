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
        Schema::table('post', function (Blueprint $table) {
            // adding a new column 'author' to the 'post' table
            $table->string('author')->nullable()->after('published');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop the column if it exists
        Schema::table('post', function (Blueprint $table) {
            $table->dropColumn('author');
        });
    }
};
