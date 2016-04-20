<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrectAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('correct_answers', function (Blueprint $table)
	{
		$table->increments('id');//Create a primary, auto-incrementing 'id' column.
		$table->timestamps();//Create standard Laravel 'created_at' and 'updated_at' columns.
		$table->integer('answer_id');//Foreign key to a correct answer.
		//TODO: Make the above answer_id a foreign key.
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::drop('correct_answers');
    }
}
