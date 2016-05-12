<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the Create Quiz Table migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table)
	{
		$table->increments('id');//Create a primary, auto-incrementing 'id' column.
		$table->timestamps();//Create standard Laravel 'created_at' and 'updated_at' columns.
		$table->string('title');
	});
    }

    /**
     * Reverse the Create Quiz Table migrations.
     *
     * @return void
     */
    public function down()
    {
	Schema::drop('quizzes');
    }
}
