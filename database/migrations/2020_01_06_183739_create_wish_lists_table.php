<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('wish_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_id')->unsigned()->nullable();
            $table->bigInteger('service_categorie_id')->unsigned()->nullable();
            $table->double('price');
            $table->date('date')->default(date("Y-m-d"));
            $table->foreign('client_id')->references('id')->on('clients')->onUpdate('set null')
            ->onDelete('set null');
            $table->foreign('service_categorie_id')->references('id')->on('service_categories')->onUpdate('set null')
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
        Schema::dropIfExists('wish_lists');
    }
}
