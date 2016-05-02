<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds for the users table.
     *
     * @return void
     */
	public function run()
	{
		$user = \QuizApp\User::firstOrCreate(['email' => 'jill@harvard.edu']);
		$user->name = 'Jill';
		$user->email = 'jill@harvard.edu';
		$user->password = \Hash::make('helloworld');
		$user->save();

		$user = \QuizApp\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
		$user->name = 'Jamal';
		$user->email = 'jamal@harvard.edu';
		$user->password = \Hash::make('helloworld');
		$user->save();

		$user = \QuizApp\User::firstOrCreate(['email' => 'jeff@harvard.edu']);
		$user->name = 'jeff';
		$user->email = 'jeff@harvard.edu';
		$user->password = \Hash::make('helloworld');
		$user->save();
	}
}
