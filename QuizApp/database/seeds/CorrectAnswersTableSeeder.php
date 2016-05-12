<?php

use Illuminate\Database\Seeder;

class CorrectAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the correct_answers table.
     *
     * @return void
     */
	public function run()
	{
		$question_id = \QuizApp\Question::where('text','=','Test Question 1')->pluck('id')->first();
		$answer_id = \QuizApp\Answer::where('text','=','Test Answer 1')->pluck('id')->first();
		DB::table('correct_answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'question_id' => $question_id,
			'answer_id' => $answer_id
		]);

		$question_id = \QuizApp\Question::where('text','=','Test Question 2')->pluck('id')->first();
		$answer_id = \QuizApp\Answer::where('text','=','Test Answer 5')->pluck('id')->first();
		DB::table('correct_answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'question_id' => $question_id,
			'answer_id' => $answer_id
		]);

		$question_id = \QuizApp\Question::where('text','=','Test Question 3')->pluck('id')->first();
		$answer_id = \QuizApp\Answer::where('text','=','Test Answer 9')->pluck('id')->first();
		DB::table('correct_answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'question_id' => $question_id,
			'answer_id' => $answer_id
		]);

		$question_id = \QuizApp\Question::where('text','=','Test Question 4')->pluck('id')->first();
		$answer_id = \QuizApp\Answer::where('text','=','Test Answer 13')->pluck('id')->first();
		DB::table('correct_answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'question_id' => $question_id,
			'answer_id' => $answer_id
		]);
	}
}
