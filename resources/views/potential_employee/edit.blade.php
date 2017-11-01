@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Are you looking to join a dynamic hairdressing team?',
	'keywords' => 'hair recruitment warrington, hairdressing jobs warrington, stylist jobs warrington ',
	'ogtitle' => 'Are you looking to join a dynamic hairdressing team?',
	'ogdescription' => 'Join Our Team',
	'ogimage' => url('/') . '/images/',
	'title' => 'Jakata Salon - Join Our Hairdressing Team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="admin">
	
	@if(Session::has('message'))
    <div class="message">
    {{{ Session::get('message') }}}
    </div>
	@endif
	
	<h1>Applicant Name: {{ $potential->full_name }}</h1>
	<h2>Applied to: {{ $potential->salon }}</h2>
	<ul>
	    <li><strong>Application date:</strong> {{ $potential->created_at->format('d/m/Y') }}</li>
	    
	    <li><strong>Mobile Number:</strong> {{ $potential->mobile }}</li>
	    
	    <li><strong>Current Position:</strong> {{ $potential->position }}</li>
	</ul>
	
	{!! Form::model($potential, [
        'method' => 'PATCH',
        'action' => ['PotentialEmployeeController@update', $potential->id]
    ]) !!}
	
	<div class="form">
		<div class="row">
			{!! Form::label('status', 'Contact Status') !!}
			{!! Form::select('status', array(
				'0' => '--Please Select--',
				'Not Contacted' => 'Not Contacted',
				'Left Message' => 'Left Message',
				'Seem Good' => 'Seem Good',
				'Discard' => 'Discard',
				)) !!}
			{!! $errors->first('status', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row">
			{!! Form::label('comment', 'Comment') !!}
			{!! Form::textArea('comment') !!}
			{!! $errors->first('comment', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
	</div>

    {!! Form::close() !!}
	
	{!! link_to('potential', 'Back to all the applicants', ['class' => 'link-button']) !!}
	
</div>

@stop