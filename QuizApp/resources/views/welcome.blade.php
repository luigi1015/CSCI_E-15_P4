@extends('master')

@section('title')
Welcome tp Jeff's Quiz App
@stop

@section('content')
		@if( Auth::check() ){{-- If logged in --}}
		<br>
		<a href="/createquiz">Create a quiz</a>
		<br>
		<a href="/takequiz">Take a quiz</a>
		<br>
		<a href="/takequiz/1">Take quiz 1</a>
		<br>
		<a href="/grades">Get grades</a>
		<br>
		<a href="/user">User Landing Page</a>
		@else{{-- If NOT logged in --}}
		@endif
@stop
