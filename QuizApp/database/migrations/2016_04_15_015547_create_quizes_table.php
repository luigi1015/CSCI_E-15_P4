<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizesTable extends Migration
{
    /**
     * Run the Create Quiz Table migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizes', function (Blueprint $table)
	{
		$table->increments('id');//Create a primary, auto-incrementing 'id' column.
		$table->timestamps();//Create standard Laravel 'created_at' and 'updated_at' columns.
		$table->string('title');
		$table->integer('user_id');//Foreign key to the user table for who owns the quiz.
		//TODO: Make the user_id above an actual foreign key.
	});
    }

    /**
     * Reverse the Create Quiz Table migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('quizes');
    }
}
