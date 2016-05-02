<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the answers table.
     *
     * @return void
     */
	public function run()
	{
		$question_id = \QuizApp\Question::where('text','=','Test Question 1')->pluck('id')->first();
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 1',
			'question_id' => $question_id
			//'question_id' => 1//Temp question ID for now, change this later.
		]);
	}
}
