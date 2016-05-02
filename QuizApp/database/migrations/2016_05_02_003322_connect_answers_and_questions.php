<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectAnswersAndQuestions extends Migration
{
    /**
     * Run the migration to connect the forien key on the answer table to the question table.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('answers', function (Blueprint $table)
		{
			//Create the database field
			$table->integer('question_id')->unsigned();//Foreign key to the question this answer belongs to.

			//Make the database field a foreign key.
			$table->foreign('question_id')->references('id')->on('questions');
		});
    }

    /**
     * Reverse the migration that connects the forien key on the answer table to the question table.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('answers', function (Blueprint $table)
		{
			//Drop the foreign key part of the database field.
			$table->dropForeign('answers_question_id_foreign');

			//Drom the database field.
			$table->dropColumn('question_id');
		});
    }
}
