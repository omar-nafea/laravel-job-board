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
        Schema::dropIfExists('post');
        Schema::create('post', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Use UUID as the primary key
            $table->string('title');
            $table->string('author');
            $table->text('body');
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('body');
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }
};
