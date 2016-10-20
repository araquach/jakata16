@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Hairdressing Apprentice application',
	'keywords' => 'Jakata, apprentice, apprenticeship, trainee, hairdressing apprentice',
	'ogtitle' => 'Apply to be an Apprentice',
	'ogdescription' => 'At Jakata all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience. Our aim is to train and develop our apprentices to the highest level, in the shortest possible time. This requires the highest level of commitment from you, so if you\'re expecting an easy ride then Jakata probably isn\'t for you but if you have the passion to do whatever it takes to be a top stylist then you\'ve come to the right place!',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Apprentice Application - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="admin">
	
	@if(Session::has('message'))
    <div class="message">
    {{{ Session::get('message') }}}
    </div>
	@endif
	
	<h1>Apprentice Name: {{ $apprentice->first_name }} {{ $apprentice->second_name }}</h1>
	<h2>Applied to: {{ $apprentice->salon_id }}</h2>
	<ul>
	    <li><strong>Application date:</strong> {{ $apprentice->created_at->format('d/m/Y') }}</li>
	    <li><strong>Age:</strong> {{ $apprentice->age }}</li>
	    <li><strong>Email Address:</strong> {{ $apprentice->email }}</li>
	    <li><strong>Mobile Number:</strong> {{ $apprentice->mobile }}</li>
	</ul>
	
	@if(count($apprentice->notes) > 0)
	<h2>Notes:</h2>
	@endif
	<ul>
		@foreach($apprentice->notes as $note)
		<li class="note">{{ $note->created_at->format('d/m/Y') }} - {{ $note->note }}</li>
		@endforeach
	</ul>
	
	@include('recruit.apprentice._admin_form')
	
	<a href="/apprentice/{{ $apprentice->id }}/note" class="link-button">Make a note</a><br>
	
	<a href="/apprentice/{{ $apprentice->id }}" class="link-button">Back to the details</a><br>
	
	{!! link_to('apprentice', 'Back to all the Apprentice applicants', ['class' => 'link-button']) !!}
	
</div>

@stop