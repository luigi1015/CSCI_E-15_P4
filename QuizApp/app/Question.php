<?php

namespace QuizApp;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	public function answers()
	{
		//A question can have many answers.
		return $this->hasMany('\QuizApp\Answer');
	}

	public function quiz()
	{
		//A question can belongs to a quiz.
		return $this->belongsTo('\QuizApp\Quiz');
	}
}
