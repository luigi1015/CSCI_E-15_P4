<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the Create Answers Table migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table)
		{
			$table->increments('id');//Create a primary, auto-incrementing 'id' column.
			$table->timestamps();//Create standard Laravel 'created_at' and 'updated_at' columns.
			$table->string('text');//The text of the answer to show to the user.
		});
    }

    /**
     * Reverse the Create Answers Table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
