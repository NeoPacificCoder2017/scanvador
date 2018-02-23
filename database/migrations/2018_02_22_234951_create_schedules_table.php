<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')
                    ->nullable();
            $table->integer('place_id');
            $table->datetime('start_at');
            $table->datetime('end_at');
            $table->integer('constant_id_lateness');
            $table->integer('constant_id_absence');
            $table->integer('teacher_id')
                    ->nullable();
            $table->integer('planner_id');
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
        Schema::dropIfExists('schedules');
    }
}
