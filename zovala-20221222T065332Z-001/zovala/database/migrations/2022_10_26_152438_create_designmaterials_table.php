<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('design_id');
            $table->unsignedInteger('material_id');
            $table->timestamps();

            //FK
            $table->foreign('design_id')->references('id')->on('designs');
            $table->foreign('material_id')->references('id')->on('materials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('design_materials');
    }
}
