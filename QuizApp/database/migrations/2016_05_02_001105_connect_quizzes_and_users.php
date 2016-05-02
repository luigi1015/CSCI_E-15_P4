<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectQuizzesAndUsers extends Migration
{
    /**
     * Run the migration to create the foreign key from quizzes to users.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('quizzes', function (Blueprint $table)
		{
			//Create the database field
			$table->integer('user_id')->unsigned();//Foreign key to the user table for who owns the quiz.

			//Make the database field a foreign key.
			$table->foreign('user_id')->references('id')->on('users');
		});
    }

    /**
     * Reverse the migration that creates the foreign key from quizzes to users.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('quizzes', function (Blueprint $table)
		{
			//Drop the foreign key part of the database field.
			$table->dropForeign('quizzes_user_id_foreign');

			//Drom the database field.
			$table->dropColumn('user_id');
		});
    }
}
