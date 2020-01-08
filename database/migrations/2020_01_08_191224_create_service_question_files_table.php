<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceQuestionFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_question_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->string('file');

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
        Schema::dropIfExists('service_question_files');
    }
}
