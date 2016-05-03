<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectCorrectAnswersAndAnswers extends Migration
{
    /**
     * Run the migration that establishes the foreign keys from the correct_answers table to the questions and answers tables.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('correct_answers', function (Blueprint $table)
		{
			//Create the database field for the questions table
			$table->integer('question_id')->unsigned();//Foreign key to a question this is a correct answer for.

			//Make the database field a foreign key.
			$table->foreign('question_id')->references('id')->on('questions');

			//Create the database field for the answers table
			$table->integer('answer_id')->unsigned();//Foreign key to a correct answer.

			//Make the database field a foreign key.
			$table->foreign('answer_id')->references('id')->on('answers');
		});
    }

    /**
     * Reverse the migration that connects.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('correct_answers', function (Blueprint $table)
		{
			//Drop the foreign key part of the database field for the questions foreign key.
			//$table->dropForeign('correctAnswers_question_id_foreign');
			$table->dropForeign(['question_id']);

			//Drom the database field for the questions foreign key.
			$table->dropColumn('question_id');

			//Drop the foreign key part of the database field for the answers foreign key.
			//$table->dropForeign('correctAnswers_answers_id_foreign');
			$table->dropForeign(['answer_id']);

			//Drom the database field for the questions foreign key.
			$table->dropColumn('answer_id');
		});
    }
}
