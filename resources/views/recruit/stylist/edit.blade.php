@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Hairdressing Stylist application',
	'keywords' => 'Jakata, apprentice, apprenticeship, trainee, hairdressing apprentice',
	'ogtitle' => 'Apply to be a Stylist',
	'title' => 'Jakata Salon - Stylist Application - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="admin">
	
	@if(Session::has('message'))
    <div class="message">
    {{{ Session::get('message') }}}
    </div>
	@endif
	
	<h1>Stylist Name: {{ $stylist->first_name }} {{ $stylist->second_name }}</h1>
	<h2>Applied to: {{ $stylist->salon_id }}</h2>
	<ul>
	    <li><strong>Application date:</strong> {{ $stylist->created_at->format('d/m/Y') }}</li>
	    <li><strong>Age:</strong> {{ $stylist->age }}</li>
	    <li><strong>Email Address:</strong> {{ $stylist->email }}</li>
	    <li><strong>Mobile Number:</strong> {{ $stylist->mobile }}</li>
	</ul>

	<ul>
         @foreach($stylist->notes as $note)
         
        <li>{{ $note->note }}</li>
        
        @endforeach
    </ul>
	
	@include('recruit.stylist._admin_form')
	
	<a href="/stylist/{{ $stylist->id }}">Back to the details</a><br>
	
	{!! link_to('stylist', 'Back to all the Stylist applicants') !!}
	
</div>

@stop