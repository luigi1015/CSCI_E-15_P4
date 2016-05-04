<?php

namespace QuizApp;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['text', 'question_id'];

	public function correctanswer()
	{
		//A answers can have a correct answer.
		return $this->hasOne('\QuizApp\CorrectAnswer');
	}

	public function question()
	{
		//An answer can belong to a question.
		return $this->belongsTo('\QuizApp\Question');
	}
}
