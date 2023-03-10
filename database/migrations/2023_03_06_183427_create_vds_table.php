<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vds', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('content')->nullable();
            $table->float('price')->nullable();
            $table->float('ball')->nullable();
            $table->integer('place')->nullable();
            $table->text('category')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vds');
    }
};
