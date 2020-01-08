<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->double('price');
            $table->integer('amount');
            $table->integer('status');
            $table->bigInteger('client_id')->unsigned()->nullable();
            $table->bigInteger('service_id')->unsigned()->nullable();
        
            $table->foreign('client_id')->references('id')->on('clients')->onUpdate('set null')
            ->onDelete('set null');
            $table->foreign('service_id')->references('id')->on('services')->onUpdate('set null')
            ->onDelete('set null');
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
        Schema::dropIfExists('orders');
    }
}
