<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestAdditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggest_additions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('suggestion');
            // $table->integer('amount');
            $table->double('price');
            $table->bigInteger('service_category_id')->unsigned()->nullable();

            $table->foreign('service_category_id')->references('id')->on('service_categories')->onUpdate('set null')
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
        Schema::dropIfExists('suggest_additions');
    }
}
