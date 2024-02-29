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
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->string('biderName');
            $table->string('biderEmail');
            $table->string('biderPrice');
            $table->index('auction_id');
            $table->foreignId('auction_id')->references('id')->on('events')->onDelete('cascade');
            $table->index('art_id');
            $table->foreignId('art_id')->references('id')->on('events')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
