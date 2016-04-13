<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class QuizController extends Controller
{
	/**
	* Responds to requests to GET /createquiz
	*/
	public function getCreateQuiz()
	{
		return 'Create a Quiz - GET';
	}

	/**
	* Responds to requests to POST /createquiz
	*/
	public function postCreateQuiz()
	{
		return 'Create a Quiz - POST';
	}

	/**
	* Responds to requests to GET /takequiz/{id}
	*/
	public function getTakeQuiz($id)
	{
		return 'Take Quiz ' . $id . ' - GET';
	}

	/**
	* Responds to requests to POST /takequiz/{id}
	*/
	public function postTakeQuiz($id)
	{
		return 'Take Quiz ' . $id . ' - POST';
	}

	/**
	* Responds to requests to GET /grades
	*/
	public function getGrades()
	{
		return 'Get Grades';
	}

	/**
	* Responds to requests to GET /user
	*/
	public function getUser()
	{
		return 'Get User';
	}
}
