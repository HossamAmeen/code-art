<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->string('answer');
            $table->bigInteger('category_question_id')->unsigned()->nullable();

            $table->foreign('category_question_id')->references('id')->on('category_questions')->onUpdate('set null')
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
        Schema::dropIfExists('questions');
    }
}
