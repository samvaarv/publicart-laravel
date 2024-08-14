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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('imageURL');
            $table->integer('yearInstalled');
            $table->string('description');
            $table->unsignedBigInteger('artist_id')->unique(); 
            $table->foreign('artist_id')->references('id')->on('artists') ->onDelete('cascade');
            $table->unsignedBigInteger('location_id')->unique(); 
            $table->foreign('location_id')->references('id')->on('locations') ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};
