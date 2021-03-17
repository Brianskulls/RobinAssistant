<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_name');
            $table->time('duration');
            $table->boolean('has_timer');
            $table->boolean('has_sound');
            $table->boolean('has_video');
            $table->string('sound_name');
            $table->string('video_name');
            $table->boolean('is_repeating');
            $table->integer('order');
            $table->foreignId('task_id')->constrained('tasks');
            $table->foreignId('activity_id')->constrained('activities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steps');
    }
}
