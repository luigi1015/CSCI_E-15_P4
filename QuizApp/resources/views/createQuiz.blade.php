@extends('master')

@section('title')
Create a Quiz
@stop

@section('content')
		<form method="POST" action="/createquiz">
			{{csrf_field()}}
			<label for="title">Title</label>
			<input type="text" name="title" id="title" value="{{old('title')}}">
			<br>
			<br>
			<label for="question1">Question 1</label>
			<input type="text" name="question1" id="question1" value="{{old('question1')}}">
			<br>
			<input name="correct1" type="radio" value="1">
			<label for="answer11">Answer 1</label>
			<input type="text" name="answer11" id="answer11" value="{{old('answer11')}}">
			<br>
			<input name="correct1" type="radio" value="2">
			<label for="answer12">Answer 2</label>
			<input type="text" name="answer12" id="answer12" value="{{old('answer12')}}">
			<br>
			<input name="correct1" type="radio" value="3">
			<label for="answer13">Answer 3</label>
			<input type="text" name="answer13" id="answer13" value="{{old('answer13')}}">
			<br>
			<input name="correct1" type="radio" value="4">
			<label for="answer14">Answer 4</label>
			<input type="text" name="answer14" id="answer14" value="{{old('answer14')}}">
			<br>
			<br>
			<label for="question1">Question 2</label>
			<input type="text" name="question2" id="question2" value="{{old('question2')}}">
			<br>
			<input name="correct2" type="radio" value="1">
			<label for="answer21">Answer 1</label>
			<input type="text" name="answer21" id="answer21" value="{{old('answer21')}}">
			<br>
			<input name="correct2" type="radio" value="2">
			<label for="answer22">Answer 2</label>
			<input type="text" name="answer22" id="answer22" value="{{old('answer22')}}">
			<br>
			<input name="correct2" type="radio" value="3">
			<label for="answer23">Answer 3</label>
			<input type="text" name="answer23" id="answer23" value="{{old('answer23')}}">
			<br>
			<input name="correct2" type="radio" value="4">
			<label for="answer24">Answer 4</label>
			<input type="text" name="answer24" id="answer24" value="{{old('answer24')}}">
			<br>
			<br>
			<label for="question1">Question 3</label>
			<input type="text" name="question3" id="question3" value="{{old('question3')}}">
			<br>
			<input name="correct3" type="radio" value="1">
			<label for="answer31">Answer 1</label>
			<input type="text" name="answer31" id="answer31" value="{{old('answer31')}}">
			<br>
			<input name="correct3" type="radio" value="2">
			<label for="answer32">Answer 2</label>
			<input type="text" name="answer32" id="answer32" value="{{old('answer32')}}">
			<br>
			<input name="correct3" type="radio" value="3">
			<label for="answer33">Answer 3</label>
			<input type="text" name="answer33" id="answer33" value="{{old('answer33')}}">
			<br>
			<input name="correct3" type="radio" value="4">
			<label for="answer34">Answer 4</label>
			<input type="text" name="answer34" id="answer34" value="{{old('answer34')}}">
			<br>
			<br>
			<label for="question1">Question 4</label>
			<input type="text" name="question4" id="question4" value="{{old('question4')}}">
			<br>
			<input name="correct4" type="radio" value="1">
			<label for="answer41">Answer 1</label>
			<input type="text" name="answer41" id="answer41" value="{{old('answer41')}}">
			<br>
			<input name="correct4" type="radio" value="2">
			<label for="answer42">Answer 2</label>
			<input type="text" name="answer42" id="answer42" value="{{old('answer42')}}">
			<br>
			<input name="correct4" type="radio" value="3">
			<label for="answer43">Answer 3</label>
			<input type="text" name="answer43" id="answer43" value="{{old('answer43')}}">
			<br>
			<input name="correct4" type="radio" value="4">
			<label for="answer44">Answer 4</label>
			<input type="text" name="answer44" id="answer44" value="{{old('answer44')}}">
			<br>
			<br>
			<button type="submit">Create the quiz</button>
		</form>
@stop

