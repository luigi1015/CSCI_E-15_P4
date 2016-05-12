<?php

use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the quizes table.
     *
     * @return void
     */
	public function run()
	{
		$user_id = \QuizApp\User::where('name','=','jeff')->pluck('id')->first();
		DB::table('quizzes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'title' => 'Test Quiz 1',
			'user_id' => $user_id
		]);
	}
}
