<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer');
            $table->unsignedInteger('quantity');
            $table->unsignedFloat('price');
            $table->dateTime('received')->nullable();
            $table->dateTime('completed')->nullable();
            $table->unsignedFloat('amount_paid')->nullable();
            $table->unsignedInteger('tailor');
            $table->dateTime('prefered_date');
            $table->string('occasion',200)->nullable();
            $table->text('details');
            $table->timestamps();

            //FK
            $table->foreign('customer')->references('id')->on('users');
            $table->foreign('tailor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
