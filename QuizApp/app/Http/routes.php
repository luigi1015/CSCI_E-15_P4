<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/createquiz', 'QuizController@getCreateQuiz');
	Route::post('/createquiz', 'QuizController@postCreateQuiz');
	Route::get('/takequiz/', 'QuizController@getTakeQuiz');
	Route::get('/takequiz/{id}', 'QuizController@getTakeQuiz');
	Route::post('/takequiz/{id}', 'QuizController@postTakeQuiz');
	Route::get('/grades', 'QuizController@getGrades');
	Route::get('/user', 'QuizController@getUser');
});

//Authentication
Route::get('/login','Auth\AuthController@getLogin');
Route::post('/login','Auth\AuthController@postLogin');
Route::get('/register','Auth\AuthController@getRegister');
Route::post('/register','Auth\AuthController@postRegister');
Route::get('/logout','Auth\AuthController@logout');


if( App::environment('local') )
{
	Route::get('/debug', function() {

	    echo '<pre>';

	    echo '<h1>Environment</h1>';
	    echo App::environment().'</h1>';

	    echo '<h1>Debugging?</h1>';
	    if(config('app.debug')) echo "Yes"; else echo "No";

	    echo '<h1>Database Config</h1>';
	    /*
	    The following line will output your MySQL credentials.
	    Uncomment it only if you're having a hard time connecting to the database and you
	    need to confirm your credentials.
	    When you're done debugging, comment it back out so you don't accidentally leave it
	    running on your live server, making your credentials public.
	    */
	    //print_r(config('database.connections.mysql'));

	    echo '<h1>Test Database Connection</h1>';
	    try {
	        $results = DB::select('SHOW DATABASES;');
	        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
	        echo "<br><br>Your Databases:<br><br>";
	        print_r($results);
	    }
	    catch (Exception $e) {
	        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
	    }

	    echo '<h1>Test QuizApp Database Setup</h1>';
	    try {
	        $results = DB::select('SHOW TABLES IN QuizApp;');
	        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
	        echo "<br><br>Your Tables:<br><br>";
	        print_r($results);
	    }
	    catch (Exception $e) {
	        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
	    }

	    echo '</pre>';

	});
}

if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP DATABASE QuizApp');
        DB::statement('CREATE DATABASE QuizApp');

        return 'Dropped QuizApp; created QuizApp.';
    });

};

if(App::environment('local')) {
	Route::get('/test', 'QuizController@getTest');
};

if(App::environment('local')) {
Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }

    return;

});
};
