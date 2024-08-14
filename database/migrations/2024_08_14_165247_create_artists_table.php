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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('artist');
            $table->timestamps();
        });

        // Schema::table('artworks', function (Blueprint $table){
        //     // $table->foreignId('artist_id')->constrained()->onDelete('cascade');
        //     $table->foreignId('artist_id')->nullable()->references('id')->on('artists')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
