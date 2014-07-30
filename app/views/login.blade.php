@extends('layout')

@section('title')
Log In
@stop

@section('background_image')
images/Servers.jpg
@stop

@section('body')

{{ Form::open(array('url' => 'account/login')) }}	
<div id="loginBox">
	{{ HTML::ul($errors->all()) }}
	<div id="items">
	<br>
	{{ Form::text('username', '', array('class' => 'input', 'placeholder' => 'User name')) }}
	{{ Form::text('password', '', array('class' => 'input', 'placeholder' => 'Password')) }}
	<br>
	{{ Form::submit('Login', array('class' => 'demo-pricing demo-pricing-1')) }}
</div>
{{ Form::close() }}

@stop