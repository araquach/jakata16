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

    <p>
    	{!! Form::label('name', 'Full Name') !!}
    	{!! Form::text('name', old('name')) !!}
    	{!! $errors->first('name', '<div class="errorMessage">:message</div>') !!}
    </p>
    
    <p>
    	{!! Form::label('email', 'Email') !!}
    	{!! Form::email('email', old('email')) !!}
    	{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
    
    <p>
    	{!! Form::label('salon_id', 'Salon Id') !!}
    	{!! Form::text('salon_id', old('salon_id')) !!}
    	{!! $errors->first('salon_id', '<div class="errorMessage">:message</div>') !!}
    </p>
    
    <p>
    	{!! Form::label('password', 'Password') !!}
    	{!! Form::text('password', old('password')) !!}
    	{!! $errors->first('password', '<div class="errorMessage">:message</div>') !!}
    </p>
    
    <p>
    	{!! Form::label('password_confirmation', 'Confirm Password') !!}
    	{!! Form::text('password_confirmation', old('password_confirmation')) !!}
    	{!! $errors->first('password_confirmation', '<div class="errorMessage">:message</div>') !!}
    </p>
    
    <p>
    	{!! Form::submit('Register') !!}
	</p>

{{ Form::close() }}
	
</div>

@stop