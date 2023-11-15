<?php namespace App\Arrival\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArrivalsTable extends Migration
{
    public function up()
    {
        Schema::create('app_arrival_arrivals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('name');
            $table->dateTime('time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_arrival_arrivals');
    }
}
