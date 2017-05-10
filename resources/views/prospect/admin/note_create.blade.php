@extends('layouts.main')

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="admin">
	
	@if(Session::has('message'))
		<div class="message">
		{{{ Session::get('message') }}}
		</div>
	@endif
	
	<h1>Prospect Note</h1>
	
	{!! Form::open(array(
	    'action' => 'ProspectController@storeNote'
    )) !!}
	
	<div class="form">
		
	    {!! Form::hidden('prospect_id', $prospect->id) !!}
		
		<div class="row">
			{!! Form::label('note', 'Create Note') !!}
			{!! Form::textArea('note') !!}
			{!! $errors->first('note', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
	
	</div>

{!! Form::close() !!}
	
	<a href="/prospect/taster/{{ $prospect->id }}" class='link-button'>Back to the details</a>

</div> 

@stop