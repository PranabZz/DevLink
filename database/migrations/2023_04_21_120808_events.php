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
        //
        Schema::create('event', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('event_title');
            $table->string('event_thumbnail');
            $table->string('event_fees');
            $table->string('event_location');
            $table->string('event_description');
            $table->string('event_organizer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('event');
    }
};
