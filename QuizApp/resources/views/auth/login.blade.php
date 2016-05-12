@extends('master')

@section('title')
Login
@stop

@section('content')
		If you don't have an account please register <a href="/register">here</a>.
		<br>
		<form method="POST" action="/login">
			{{csrf_field()}}
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="{{old('email')}}">

			<label for="password">Password</label>
			<input type="password" name="password" id="password" value="{{old('password')}}">

			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember me</label>

			<button type="submit">Login</button>
		</form>
@stop
