<?php

namespace QuizApp;

use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
	public function answer()
	{
		//A correct answer can belong to an answer.
		return $this->belongsTo('\QuizApp\Answer');
	}
}
