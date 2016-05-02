<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the questions table.
     *
     * @return void
     */
	public function run()
	{
		$quiz_id = \QuizApp\Quiz::where('title','=','Test Quiz 1')->pluck('id')->first();
		DB::table('questions')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Question 1',
			'quiz_id' => $quiz_id
			//'quiz_id' => 1//Temp quiz ID for now, change this later.
		]);
	}
}
