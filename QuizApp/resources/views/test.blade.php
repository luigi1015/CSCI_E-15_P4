<!DOCTYPE html>
<html>
    <head>
        <title>This is a test</title>
    </head>
    <body>
	<h1>This is a test</h1>
	<h2>Quizzes</h2>
	@forelse ($quizzes as $quiz)
		ID: {{$quiz->id}}
		<br>
		Title: {{$quiz->title}}
		<br>
		<br>
	@empty
		No quizzes.
		<br>
		<br>
	@endforelse
	<h2>Questions</h2>
	@forelse ($questions as $question)
		ID: {{$question->id}}
		<br>
		Text: {{$question->text}}
		<br>
		<br>
	@empty
		No questions.
		<br>
		<br>
	@endforelse
	<h2>Answers</h2>
	@forelse ($answers as $answer)
		ID: {{$answer->id}}
		<br>
		Text: {{$answer->text}}
		<br>
		<br>
	@empty
		No answers.
		<br>
		<br>
	@endforelse
	<h2>Correct Answers</h2>
	@forelse ($correctanswers as $correctanswer)
		ID: {{$correctanswer->id}}
		<br>
		Answer ID: {{$correctanswer->answer_id}}
		<br>
		Question ID: {{$correctanswer->question_id}}
		<br>
		<br>
	@empty
		No correct answers.
		<br>
		<br>
	@endforelse

	@forelse ($quizzes as $quiz)
		ID: {{$quiz->id}}
		<br>
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
	@empty
		No quizzes.
		<br>
		<br>
	@endforelse
    </body>
</html>
