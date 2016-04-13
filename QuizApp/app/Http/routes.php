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
Route::get('/createquiz', 'QuizController@getCreateQuiz');
Route::post('/createquiz', 'QuizController@postCreateQuiz');
Route::get('/takequiz/', 'QuizController@getTakeQuiz');
Route::get('/takequiz/{id}', 'QuizController@getTakeQuiz');
Route::post('/takequiz/{id}', 'QuizController@postTakeQuiz');
Route::get('/grades', 'QuizController@getGrades');
Route::get('/user', 'QuizController@getUser');
