<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlannerSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planner_spots', function (Blueprint $table) {
            $table->id();
            $table->string('planner_id',20);
            $table->string('planner_name',20);
            $table->string('spot_name');
            $table->string('destination');
            $table->date('journey_date');
            $table->string('total_cost');
            $table->text('description');
            $table->text('image');
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
        Schema::dropIfExists('planner_spots');
    }
}
