<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the Create Questions Table migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table)
	{
		$table->increments('id');//Create a primary, auto-incrementing 'id' column.
		$table->timestamps();//Create standard Laravel 'created_at' and 'updated_at' columns.
		$table->string('text');//Text of the question to be shown to the user.
	});
    }

    /**
     * Reverse the Create Questions Table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
