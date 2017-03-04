@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Admin'
	])
	
@stop

@section('content')

<div id="admin" class="form">

	<h1>Register</h1>
	
	{{ Form::open(array('url' => '/register')) }}

    {{ form::hidden('role', 2) }}

    <div class="row">
    	{!! Form::label('name', 'Full Name') !!}
    	{!! Form::text('name', old('name')) !!}
    	{!! $errors->first('name', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row">
    	{!! Form::label('email', 'Email') !!}
    	{!! Form::email('email', old('email')) !!}
    	{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row">
		{!! Form::label('salon_id', 'Salon') !!}
		{!! Form::select('salon_id', array(
			'1' => 'Jakata',
			'2' => 'Paul Kemp Hairdressing'
			), old('salon_id'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('salon_id', '<div class="errorMessage">:message</div>') !!}
	</div>
    
    <div class="row">
    	{!! Form::label('password', 'Password') !!}
    	{!! Form::text('password', old('password')) !!}
    	{!! $errors->first('password', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row">
    	{!! Form::label('password_confirmation', 'Confirm Password') !!}
    	{!! Form::text('password_confirmation', old('password_confirmation')) !!}
    	{!! $errors->first('password_confirmation', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row buttons">
    	{!! Form::submit('Register') !!}
	</div>

{{ Form::close() }}
	
</div>

@stop