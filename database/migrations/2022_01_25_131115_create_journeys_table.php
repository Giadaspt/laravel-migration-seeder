<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();

            $table->string('journey_promo', 50);
            $table->string('location', 100);
            $table->string('duration', 10);
            $table->date('beginning_holiday');
            $table->date('end_holiday');
            $table->string('location_to_stay', 100);
            $table->string('description', 200);
            $table->decimal('price')->unsigned();
            $table->boolean('meals_included')->unsigned()->default(1);
            $table->boolean('meals_not_included')->unsigned()->default(0);
            
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
        Schema::dropIfExists('journeys');
    }
}
