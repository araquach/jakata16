@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Taster Package Applicant'
	])
	
@stop

@section('content')

<div id="admin">

<h1>Applicant Name: {{ $prospect->first_name }} {{ $prospect->last_name }}</h1>

@if(Session::has('message'))
    <div class="message">
        {{{ Session::get('message') }}}
    </div>
@endif

<ul>
    <li><strong>Application date:</strong> {{ $prospect->created_at->format('d/m/Y') }}</li>
    <li><strong>Email Address:</strong> {{ $prospect->email }}</li>
    <li><strong>Mobile Number:</strong> {{ $prospect->mobile }}</li>
</ul>

@if(count($prospect->notes) > 0)
<h2>Notes:</h2>
@endif
<ul>
    @foreach($prospect->notes as $note)
     
        <li class="note">{{ $note->created_at->format('d/m/Y') }} - {{ $note->note }}</li>
    
    @endforeach
</ul>

{!! Form::model($prospect, [
    'method' => 'PATCH',
    'action' => ['ProspectController@update', $prospect->id],
]) !!}
	
	<div class="form">
		<div class="row">
			{!! Form::label('contact_status', 'Contact Status') !!}
			{!! Form::select('contact_status', array(
				'0' => '--Please Select--',
				'Left Message' => 'Left Message',
				'Call back' => 'Need to call back',
				'Booked' => 'Booked Taster Package',
				'Not Interested' => 'Not Interested',
				)) !!}
			{!! $errors->first('contact_status', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
	</div>

{!! Form::close() !!}

<a href="/prospect/{{ $prospect->id }}/note" class="link-button">Notes</a><br>

{!! link_to('prospect/taster', 'Back to all the applicants', ['class' => 'link-button']) !!}

</div>

@stop