@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="admin">
    
	<h1>Votes</h1>
	
	<h2>Jakata</h2>
	<ul>
	    @foreach($jakVotes as $jakVote)
	        <li>{{ $jakVote->name }} {{ count($jakVote->superstylists) }} / {{ $jakStaffCount }}</li>
	    @endforeach
	</ul>
	
	
	<h2>PK</h2>
	<ul>
	    @foreach($pkVotes as $pkVote)
	        <li>{{ $pkVote->name }} {{ count($pkVote->superstylists) }} / {{ $pkStaffCount }}</li>
	    @endforeach
	</ul>

</div>

@stop