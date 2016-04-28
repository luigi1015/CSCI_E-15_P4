<?php

use Illuminate\Database\Seeder;

class QuizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the quizes table.
     *
     * @return void
     */
    public function run()
    {
	DB::table('quizzes')->insert([
		'created_at' => Carbon\Carbon::now()->toDateTimeString(),
		'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
		'title' => 'Test Quiz 1',
		'user_id' => 1//Temp user ID for now, change this once users are set up.
	]);
    }
}
