<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('service_provider_id')->unsigned()->nullable();
            $table->foreign('service_provider_id')->references('id')->on('service_providers')->onDelete('cascade');

            $table->bigInteger('service_provider_service_id')->unsigned()->nullable();
            $table->foreign('service_provider_service_id')->references('id')->on('service_provider_services')->onDelete('cascade');
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
        Schema::dropIfExists('services');
    }
}
