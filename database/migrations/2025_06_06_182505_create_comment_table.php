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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->string('author')->nullable();
            $table->text('content');
            $table->foreignId('post_id')->constrained('post')->onDelete('cascade');
            // The foreignId method creates an unsigned BIGINT equivalent column for the foreign key
            // The 'constrained' method automatically infers the foreign key column name and references the 'id' column on the 'post' table
            // The 'onDelete' method specifies that if the referenced post is deleted, all related comments should also be deleted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
