<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		@if(count($errors) > 0)
			<ul class="errors">
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
		If you alread have an account please login <a href="/login">here</a>.
		<br>
		<form method="POST" action="/register">
			{{csrf_field()}}
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="{{old('name')}}">

			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="{{old('email')}}">

			<label for="password">Password</label>
			<input type="password" name="password" id="password">

			<label for="password_confirmation">Confirm Password</label>
			<input type="password" name="password_confirmation" id="password_confirmation">

			<button type="submit">Register</button>
		</form>
		<br>
		<a href="/">Back to homepage</a>
	</body>
</html>
