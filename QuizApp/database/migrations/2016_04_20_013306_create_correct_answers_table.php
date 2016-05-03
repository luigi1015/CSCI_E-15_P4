<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrectAnswersTable extends Migration
{
    /**
     * Run the migration to create the correct_answers table.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('correct_answers', function (Blueprint $table)
		{
			$table->increments('id');//Create a primary, auto-incrementing 'id' column.
			$table->timestamps();//Create standard Laravel 'created_at' and 'updated_at' columns.
		});
    }

    /**
     * Reverse the migration that creates the correct_answers table.
     *
     * @return void
     */
	public function down()
	{
		Schema::drop('correct_answers');
	}
}
