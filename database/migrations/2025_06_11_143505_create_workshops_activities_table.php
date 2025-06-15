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
        Schema::create('workshops_activities', function (Blueprint $table) {
            $table->id();
            $table->string('name_activity', 250)->nullable()->default('actividad');
            $table->string('description_activity');
            $table->date('date_activity')->nullable();
            $table->time('time_activity')->nullable();
            $table->string('image_activity', 100)->nullable()->default('imagen_actividad');

            $table->unsignedBigInteger('workshop_id');
            $table->foreign('workshop_id')->references('id')->on('workshops')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops_activities');
    }
};
