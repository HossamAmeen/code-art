<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceQuestionMultipleChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_question_multiple_choices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->string('choice_one');
            $table->string('choice_two');
            $table->string('choice_three');
            $table->string('choice_four');

            $table->bigInteger('service_question_id')->unsigned()->nullable();
            $table->foreign('service_question_id')->references('id')->on('service_questions')->onDelete('set null');

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
        Schema::dropIfExists('service_question_multiple_choices');
    }
}
