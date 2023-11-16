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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_to_id');
            $table->foreign('destination_to_id')->references('id')->on('destinations');
            $table->unsignedBigInteger('destination_from_id');
            $table->foreign('destination_from_id')->references('id')->on('destinations');
            $table->integer('bus_number');
            $table->enum('bus_type', ['Regular', 'Premium', 'P2P']);
            $table->string('departure_time');
            $table->string('departure_date');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
