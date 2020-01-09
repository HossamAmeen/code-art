<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('price');
            $table->integer('days');
            $table->bigInteger('service_provider_id')->unsigned()->nullable();
            $table->bigInteger('service_id')->unsigned()->nullable();

            $table->foreign('service_provider_id')->references('id')->on('service_providers')
            ->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('service_categories')->onDelete('cascade');
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
        Schema::dropIfExists('service_types');
    }
}
