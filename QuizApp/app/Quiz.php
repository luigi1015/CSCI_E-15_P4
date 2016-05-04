<?php

namespace QuizApp;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	protected $fillable = ['title', 'user_id'];

	public function questions()
	{
		//A quiz can have many questions.
		return $this->hasMany('\QuizApp\Question');
	}

	public function user()
	{
		//A quiz can belongs to a user.
		return $this->belongsTo('\QuizApp\User');
	}
}
