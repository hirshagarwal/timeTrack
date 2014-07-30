@extends('layout')

@section('title')
Sign up!
@stop

@section('background_image')
images/Servers.jpg
@stop

@section('body')

{{ Form::open(array('url' => 'account/create')) }}	
<div id="box">
	{{ HTML::ul($errors->all()) }}
	<div id="items">
	<br>		
	{{ Form::text('name', '', array('class' => 'input', 'placeholder' => 'Name')) }}
	{{ Form::text('email', '', array('class' => 'input', 'placeholder' => 'Email Address')) }}
	{{ Form::text('username', '', array('class' => 'input', 'placeholder' => 'User name')) }}
	{{ Form::text('password', '', array('class' => 'input', 'placeholder' => 'Password')) }}

	{{ Form::submit('Create', array('class' => 'demo-pricing demo-pricing-1')) }}
	</div>

</div>
{{ Form::close() }}

@stop