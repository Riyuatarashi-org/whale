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
        Schema::create('boats', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('boat_type_id');

            $table->integer('direction'); // in radians
            $table->integer('start_x');
            $table->integer('start_y');
            $table->integer('end_x');
            $table->integer('end_y');

            $table->json('destroyed_cells');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boats');
    }
};
