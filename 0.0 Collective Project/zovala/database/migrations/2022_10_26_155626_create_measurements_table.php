<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('collar',10);
            $table->string('chest',10);
            $table->string('sleeve',10);
            $table->string('waist',10);
            $table->string('hips',10);
            $table->string('inseam',10);
            $table->string('outseam',10);
            $table->unsignedInteger('user_id');
            $table->timestamps();

            //FK
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measurements');
    }
}
