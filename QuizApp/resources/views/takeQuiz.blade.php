<!DOCTYPE html>
<html>
    <head>
        <title>Jeff's Quiz App</title>
    </head>
    <body>
	@if (isset($quiz) and !($quiz->isEmpty()))
		<h1>{{$quiz->title}}</h1>
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
	@else
		No quiz found.
	@endif
	<br>
	<a href="/">Back to homepage</a>
    </body>
</html>
