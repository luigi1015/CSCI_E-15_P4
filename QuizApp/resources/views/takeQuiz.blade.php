@extends('master')

@section('title')
Jeff's Quiz App
@stop

@section('content')
	@if (isset($quiz))
		<h1>{{$quiz->title}}</h1>
		<form method="POST" action="/takequiz">
		@forelse ($questions as $question)
			@if ($question->quiz_id == $quiz->id)
				{{$question->text}}
				<br>
				@forelse ($answers as $answer)
					@if ($answer->question_id == $question->id)
						<input type='checkbox' name='{{$question->id}}' value='{{$answer->id}}' id='q{{$question->id}}a{{$answer->id}}'>
						<label for='q{{$question->id}}a{{$answer->id}}'>{{$answer->text}}</label>
						<br>
					@endif
				@empty
					No answers.
					<br>
					<br>
				@endforelse
			@endif
		@empty
			No questions.
			<br>
			<br>
		@endforelse
		<button type="submit">Submit Answers</button>
		</form>
	@else
		@if (isset($quizzes))
			Quizzes:
			<br>
			@forelse ($quizzes as $quiz)
				<a href='\takequiz\{{$quiz->id}}'>{{$quiz->title}}</a>
				<br>
			@empty
				No quizzes found.
			@endforelse
		@else
			No quiz found.
		@endif
	@endif
	<br>
@stop
