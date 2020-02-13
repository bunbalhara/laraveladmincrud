<?php

use Illuminate\Support\Facades\DB;
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
            $table->integer('noseId');
            $table->integer('matalaId');
            $table->text('question_text');
            $table->text('question_answer_1');
            $table->text('question_answer_2');
            $table->text('question_answer_3');
            $table->integer('question_right_answer');
            $table->integer('question_points');
            $table->text('question_full_answer');
            $table->integer('question_status')->default(1);
            $table->timestamps();
        });
        DB::statement('ALTER TABLE questions ENGINE=InnoDB AUTO_INCREMENT=117975 DEFAULT CHARSET=latin1;');
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
