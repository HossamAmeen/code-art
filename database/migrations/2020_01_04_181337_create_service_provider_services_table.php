<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProviderServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description');
            $table->double('discount')->nullable();
            $table->double('rate')->default(2.5);
            $table->double('price');
            $table->string('image');
            $table->longText('overview');
            $table->string('title');
            $table->string('program');

            $table->bigInteger('service_provider_id')->unsigned()->nullable();
            $table->foreign('service_provider_id')->references('id')->on('service_providers')->onDelete('cascade');

            $table->bigInteger('service_category_id')->unsigned()->nullable();
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
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
        Schema::dropIfExists('service_provider_services');
    }
}
