<?php

namespace QuizApp\Http\Controllers;

use QuizApp\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizController extends Controller
{
	/**
	* Responds to requests to GET /createquiz
	*/
	public function getCreateQuiz()
	{
		return view('createQuiz');
	}

	/**
	* Responds to requests to POST /createquiz
	*/
	public function postCreateQuiz(Request $request)
	{
		/*Validate the data*/
		$this->validate($request, [
			'title' => 'required|min:3|max:255'
		]);

		/*Get the Quiz data*/
		$quizData = $request->only('title');
		$quizData['user_id'] = \Auth::id();

		/*Save the Quiz data*/
		$quiz = \QuizApp\Quiz::create($quizData);

		/*Get the Question 1 data*/
		$question1Data['text'] = $request->input('question1');
		$question1Data['quiz_id'] = $quiz->id;

		/*Save the Question 1 data*/
		$question1 = \QuizApp\Question::create($question1Data);

		/*Get the Answer 1-1 data*/
		$answer11Data['text'] = $request->input('answer11');
		$answer11Data['question_id'] = $question1->id;

		/*Save the Answer 1-1 data*/
		$answer11 = \QuizApp\Answer::create($answer11Data);

		/*Get the Answer 1-2 data*/
		$answer12Data['text'] = $request->input('answer12');
		$answer12Data['question_id'] = $question1->id;

		/*Save the Answer 1-2 data*/
		$answer12 = \QuizApp\Answer::create($answer12Data);

		/*Get the Answer 1-3 data*/
		$answer13Data['text'] = $request->input('answer13');
		$answer13Data['question_id'] = $question1->id;

		/*Save the Answer 1-3 data*/
		$answer13 = \QuizApp\Answer::create($answer13Data);

		/*Get the Answer 1-4 data*/
		$answer14Data['text'] = $request->input('answer14');
		$answer14Data['question_id'] = $question1->id;

		/*Save the Answer 1-4 data*/
		$answer14 = \QuizApp\Answer::create($answer14Data);
		
		$correct1 = $request->input('correct1');
		$correct1Data['question_id'] = $question1->id;
		if( $correct1 == '1' )
		{
			$correct1Data['answer_id'] = $answer11->id;
		}
		else if( $correct1 == '2' )
		{
			$correct1Data['answer_id'] = $answer12->id;
		}
		else if( $correct1 == '3' )
		{
			$correct1Data['answer_id'] = $answer13->id;
		}
		else
		{
			$correct1Data['answer_id'] = $answer14->id;
		}
		$correctAnswer1 = \QuizApp\CorrectAnswer::create($correct1Data);

		/*Get the Question 2 data*/
		$question2Data['text'] = $request->input('question2');
		$question2Data['quiz_id'] = $quiz->id;

		/*Save the Question 2 data*/
		$question2 = \QuizApp\Question::create($question2Data);

		/*Get the Answer 2-1 data*/
		$answer21Data['text'] = $request->input('answer21');
		$answer21Data['question_id'] = $question2->id;

		/*Save the Answer 2-1 data*/
		$answer21 = \QuizApp\Answer::create($answer21Data);

		/*Get the Answer 2-2 data*/
		$answer22Data['text'] = $request->input('answer22');
		$answer22Data['question_id'] = $question2->id;

		/*Save the Answer 2-2 data*/
		$answer22 = \QuizApp\Answer::create($answer22Data);

		/*Get the Answer 2-3 data*/
		$answer23Data['text'] = $request->input('answer23');
		$answer23Data['question_id'] = $question2->id;

		/*Save the Answer 2-3 data*/
		$answer23 = \QuizApp\Answer::create($answer23Data);

		/*Get the Answer 2-4 data*/
		$answer24Data['text'] = $request->input('answer24');
		$answer24Data['question_id'] = $question2->id;

		/*Save the Answer 2-4 data*/
		$answer24 = \QuizApp\Answer::create($answer24Data);

		/*Get the Question 3 data*/
		$question3Data['text'] = $request->input('question3');
		$question3Data['quiz_id'] = $quiz->id;
		
		$correct2 = $request->input('correct2');
		$correct2Data['question_id'] = $question2->id;
		if( $correct2 == '1' )
		{
			$correct2Data['answer_id'] = $answer21->id;
		}
		else if( $correct2 == '2' )
		{
			$correct2Data['answer_id'] = $answer22->id;
		}
		else if( $correct2 == '3' )
		{
			$correct2Data['answer_id'] = $answer23->id;
		}
		else
		{
			$correct2Data['answer_id'] = $answer24->id;
		}
		$correctAnswer2 = \QuizApp\CorrectAnswer::create($correct2Data);

		/*Save the Question 3 data*/
		$question3 = \QuizApp\Question::create($question3Data);

		/*Get the Answer 3-1 data*/
		$answer31Data['text'] = $request->input('answer31');
		$answer31Data['question_id'] = $question3->id;

		/*Save the Answer 3-1 data*/
		$answer31 = \QuizApp\Answer::create($answer31Data);

		/*Get the Answer 3-2 data*/
		$answer32Data['text'] = $request->input('answer32');
		$answer32Data['question_id'] = $question3->id;

		/*Save the Answer 3-2 data*/
		$answer32 = \QuizApp\Answer::create($answer32Data);

		/*Get the Answer 3-3 data*/
		$answer33Data['text'] = $request->input('answer33');
		$answer33Data['question_id'] = $question3->id;

		/*Save the Answer 3-3 data*/
		$answer33 = \QuizApp\Answer::create($answer33Data);

		/*Get the Answer 3-4 data*/
		$answer34Data['text'] = $request->input('answer34');
		$answer34Data['question_id'] = $question3->id;

		/*Save the Answer 3-4 data*/
		$answer34 = \QuizApp\Answer::create($answer34Data);
		
		$correct3 = $request->input('correct3');
		$correct3Data['question_id'] = $question3->id;
		if( $correct3 == '1' )
		{
			$correct3Data['answer_id'] = $answer31->id;
		}
		else if( $correct3 == '2' )
		{
			$correct3Data['answer_id'] = $answer32->id;
		}
		else if( $correct3 == '3' )
		{
			$correct3Data['answer_id'] = $answer33->id;
		}
		else
		{
			$correct3Data['answer_id'] = $answer34->id;
		}
		$correctAnswer3 = \QuizApp\CorrectAnswer::create($correct3Data);

		/*Get the Question 4 data*/
		$question4Data['text'] = $request->input('question4');
		$question4Data['quiz_id'] = $quiz->id;

		/*Save the Question 4 data*/
		$question4 = \QuizApp\Question::create($question4Data);

		/*Get the Answer 4-1 data*/
		$answer41Data['text'] = $request->input('answer41');
		$answer41Data['question_id'] = $question4->id;

		/*Save the Answer 4-1 data*/
		$answer41 = \QuizApp\Answer::create($answer41Data);

		/*Get the Answer 4-2 data*/
		$answer42Data['text'] = $request->input('answer42');
		$answer42Data['question_id'] = $question4->id;

		/*Save the Answer 4-2 data*/
		$answer42 = \QuizApp\Answer::create($answer42Data);

		/*Get the Answer 4-3 data*/
		$answer43Data['text'] = $request->input('answer43');
		$answer43Data['question_id'] = $question4->id;

		/*Save the Answer 4-3 data*/
		$answer43 = \QuizApp\Answer::create($answer43Data);

		/*Get the Answer 4-4 data*/
		$answer44Data['text'] = $request->input('answer44');
		$answer44Data['question_id'] = $question4->id;

		/*Save the Answer 4-4 data*/
		$answer44 = \QuizApp\Answer::create($answer44Data);
		
		$correct4 = $request->input('correct4');
		$correct4Data['question_id'] = $question4->id;
		if( $correct4 == '1' )
		{
			$correct4Data['answer_id'] = $answer41->id;
		}
		else if( $correct4 == '2' )
		{
			$correct4Data['answer_id'] = $answer42->id;
		}
		else if( $correct4 == '3' )
		{
			$correct4Data['answer_id'] = $answer43->id;
		}
		else
		{
			$correct4Data['answer_id'] = $answer44->id;
		}
		$correctAnswer4 = \QuizApp\CorrectAnswer::create($correct4Data);

		/*Tell the user the data was saved*/
		\Session::flash('message','Quiz ' . $quiz->id . ' was added');

		return view('createQuiz');
	}

	/**
	* Responds to requests to GET /takequiz/{id}
	*/
	public function getTakeQuiz( $id = NULL )
	{
		if( is_null($id) )
		{
			return view('takeQuiz')->with('id', '*invalid*')->with('quizzes',\QuizApp\Quiz::all());
		}

		return view('takeQuiz')->with('id', $id)->with('quiz',\QuizApp\Quiz::find($id))->with('questions',\QuizApp\Question::all())->with('answers',\QuizApp\Answer::all())->with('quizzes',\QuizApp\Quiz::all());
	}

	/**
	* Responds to requests to POST /takequiz/{id}
	*/
	public function postTakeQuiz( $id = NULL )
	{
		if( is_null($id) )
		{
			return view('takeQuiz')->with('id', '*invalid*');
		}

		return view('takeQuiz')->with('id', $id);
	}

	/**
	* Responds to requests to GET /grades
	*/
	public function getGrades()
	{
		return view('grades');
	}

	/**
	* Responds to requests to GET /user
	*/
	public function getUser()
	{
		return view('user');
	}

	/**
	* Responds to requests to GET /test
	*/
	public function getTest()
	{
		return view('test')->with('quizzes',\QuizApp\Quiz::all())->with('answers',\QuizApp\Answer::all())->with('questions',\QuizApp\Question::all())->with('correctanswers',\QuizApp\CorrectAnswer::all());
	}
}
