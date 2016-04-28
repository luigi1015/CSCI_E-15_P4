<!DOCTYPE html>
<html>
    <head>
        <title>This is a test</title>
    </head>
    <body>
	<h1>This is a test</h1>
	<h2>Quizzes</h2>
	@foreach ($quizzes as $quiz)
		ID: {{$quiz->id}}
		<br>
		Title: {{$quiz->title}}
		<br>
		<br>
	@endforeach
    </body>
</html>
