<?php

use Illuminate\Database\Seeder;

class CorrectAnsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the correct_answers table.
     *
     * @return void
     */
    public function run()
    {
	DB::table('correct_answers')->insert([
		'created_at' => Carbon\Carbon::now()->toDateTimeString(),
		'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
		'question_id' => 1,//Temp question ID for now, change this later.
		'answer_id' => 1//Temp answer ID for now, change this later.
	]);
    }
}