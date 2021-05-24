<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlannerTravellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planner_travellers', function (Blueprint $table) {
            $table->id();
            $table->string('spot_id',20);
            $table->string('spot_name');
            $table->string('destination');
            $table->string('traveller_id',20);
            $table->string('name',20);
            $table->string('mobile',20);
            $table->string('email');
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
        Schema::dropIfExists('planner_travellers');
    }
}
