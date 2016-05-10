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
		<br>
		<a href="/">Back to homepage</a>
	</body>
</html>
