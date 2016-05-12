<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title',"Jeff's Quiz App")</title>{{-- Put in the title if provided, otherwise default to "Jeff's Quiz App" --}}
        <meta charset='utf-8'>
        @yield('head'){{-- Anything to put in the head for a specific page. --}}
    </head>
    <body>
		{{-- Display a message from the session if there is one. --}}
		@if(Session::get('message') != null)
			<div>{{ Session::get('message') }}</div>
		@endif

		{{-- Display any errors. --}}
		@if(count($errors) > 0)
			<ul class="errors">
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		@if( Auth::check() ){{-- If logged in --}}
			<a href="/user">User Landing Page</a>
			<br>
			<a href="/logout">Log Out Page</a>
			<br>
		@else{{-- If NOT logged in --}}
			<br>
			<a href="/login">Log In Page</a>
			<br>
			<a href="/register">Register Page</a>
			<br>
		@endif

		@yield('content'){{-- Main page content --}}

		<br>
		<a href="/">Back to homepage</a>
    </body>
</html>
