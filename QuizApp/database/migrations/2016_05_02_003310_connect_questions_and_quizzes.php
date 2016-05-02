<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectQuestionsAndQuizzes extends Migration
{
    /**
     * Run the migration to connect the foreign key on the questions table to the quizzes table.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('questions', function (Blueprint $table)
		{
			//Create the database field
			$table->integer('quiz_id')->unsigned();//Foreign key to the quiz this should be a part of.

			//Make the database field a foreign key.
			$table->foreign('quiz_id')->references('id')->on('quizzes');
		});
    }

    /**
     * Reverse the migration that connects the foreign key on the questions table to the quizzes table.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('questions', function (Blueprint $table)
		{
			//Drop the foreign key part of the database field.
			$table->dropForeign('questions_quiz_id_foreign');

			//Drom the database field.
			$table->dropColumn('quiz_id');
		});
    }
}
