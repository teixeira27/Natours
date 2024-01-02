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
        Schema::create('slots', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start_time');
            $table->unsignedInteger('quantity')->default(0);
            //$table->unsignedInteger('duration')->default(60);
            $table->unsignedBigInteger('spot_id');
            $table->timestamps();

            $table->foreign('spot_id')
                ->references('id')
                ->on('spots')
                ->onUpdate('CASCADE')
                ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slots');
    }
};
