<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->text('body');
            $table->unsignedInteger('user_id');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->timestamps();
        });
        Schema::create('comment_question', function (Blueprint $table) {
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('comment_id');

            $table->foreign('question_id')
                ->references('id')->on('questions')
                ->onDelete('cascade');
            $table->foreign('comment_id')
                ->references('id')->on('comments')
                ->onDelete('cascade');
        });
        Schema::create('comment_answer', function (Blueprint $table) {
            $table->unsignedInteger('answer_id');
            $table->unsignedInteger('comment_id');

            $table->foreign('answer_id')
                ->references('id')->on('answers')
                ->onDelete('cascade');
            $table->foreign('comment_id')
                ->references('id')->on('comments')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_comment');
        Schema::dropIfExists('question_comment');
        Schema::dropIfExists('comments');
    }
}
