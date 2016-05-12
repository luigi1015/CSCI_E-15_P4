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
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 2',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 3',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 4',
			'question_id' => $question_id
		]);

		$question_id = \QuizApp\Question::where('text','=','Test Question 2')->pluck('id')->first();
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 5',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 6',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 7',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 8',
			'question_id' => $question_id
		]);

		$question_id = \QuizApp\Question::where('text','=','Test Question 3')->pluck('id')->first();
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 9',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 10',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 11',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 12',
			'question_id' => $question_id
		]);

		$question_id = \QuizApp\Question::where('text','=','Test Question 4')->pluck('id')->first();
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 13',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 14',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 15',
			'question_id' => $question_id
		]);
		DB::table('answers')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'text' => 'Test Answer 16',
			'question_id' => $question_id
		]);
	}
}
