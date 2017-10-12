@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Are you looking to join a dynamic hairdressing team?',
	'keywords' => '',
	'ogtitle' => 'Are you looking to join a dynamic hairdressing team?',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/',
	'title' => 'Jakata Salon - Join Our Hairdressing Team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="potential">

    @if(Session::has('message'))
        <div class="alert alert-info">
    		{{{ Session::get('message') }}}
        </div>
    @endif
    
    <div id="form" class="form">

<ul>
    @foreach($errors->all() as $error)
        <li>{{{ $error }}}</li>
    @endforeach
</ul>

{!! Form::open(array('action' => 'PotentialEmployeeController@store', 'class' => 'form')) !!}

	<div class="row">
	{!! Form::label('full_name', 'Full Name') !!}
	{!! Form::text('full_name') !!}
	{!! $errors->first('full_name', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('position', 'Current Position') !!}
	{!! Form::text('position') !!}
	{!! $errors->first('position', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('mobile', 'Mobile Number') !!}
	{!! Form::text('mobile') !!}
	{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row buttons">
	{!! Form::submit('Submit') !!}
	</div>
	
{!! Form::close() !!}

</div><!-- form -->

</div>

@stop