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
