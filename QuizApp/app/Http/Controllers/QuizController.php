<?php

namespace QuizApp\Http\Controllers;

use QuizApp\Http\Controllers\Controller;

class QuizController extends Controller
{
	/**
	* Responds to requests to GET /createquiz
	*/
	public function getCreateQuiz()
	{
		//return 'Create a Quiz - GET';
		return view('createQuiz');
	}

	/**
	* Responds to requests to POST /createquiz
	*/
	public function postCreateQuiz()
	{
		//return 'Create a Quiz - POST';
		return view('createQuiz');
	}

	/**
	* Responds to requests to GET /takequiz/{id}
	*/
	public function getTakeQuiz( $id = NULL )
	{
		if( is_null($id) )
		{
			//return 'Take Quiz *invalid id* - GET';
			return view('takeQuiz')->with('id', '*invalid*');
		}

		//return 'Take Quiz ' . $id . ' - GET';
		return view('takeQuiz')->with('id', $id);
	}

	/**
	* Responds to requests to POST /takequiz/{id}
	*/
	public function postTakeQuiz( $id = NULL )
	{
		if( is_null($id) )
		{
			//return 'Take Quiz *invalid id* - POST';
			return view('takeQuiz')->with('id', '*invalid*');
		}

		//return 'Take Quiz ' . $id . ' - POST';
		return view('takeQuiz')->with('id', $id);
	}

	/**
	* Responds to requests to GET /grades
	*/
	public function getGrades()
	{
		//return 'Get Grades';
		return view('grades');
	}

	/**
	* Responds to requests to GET /user
	*/
	public function getUser()
	{
		//return 'Get User';
		return view('user');
	}

	/**
	* Responds to requests to GET /test
	*/
	public function getTest()
	{
		return view('test');
	}
}
