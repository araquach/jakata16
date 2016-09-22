@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Apply to be a Jakata Apprentice',
	'keywords' => 'Jakata, apprentice, hairdresser, reruitment, job',
	'ogtitle' => 'Become a Jakata Apprentice',
	'ogdescription' => 'The Jakata team are always on the look out for new talented apprentices. If you think Jakata is the salon for you apply here...',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Apprentice Application - hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="admin">
	
	@if(Session::has('message'))
		<div class="message">
		{{{ Session::get('message') }}}
		</div>
	@endif
	
	<div id="form">
		<h1>Applicant Note</h1>
	
		@include('recruit.apprentice._note_form')
	
	</div> 
	
	<a href="/apprentice/{{ $apprentice->id }}">Back to the details</a>

</div> 

@stop