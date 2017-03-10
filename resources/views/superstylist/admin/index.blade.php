@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="admin">
    
	<h1>Votes</h1>
	
	<h2>Jakata</h2>
	<ul>
	    @foreach($jakStaffs as $jakStaff)
	        <li>{{ $jakStaff->name }} {{ count($jakStaff->votes) }} / {{ count($jakStaffs) -1 }}</li>
	    @endforeach
	</ul>
	
	
	<h2>PK</h2>
	<ul>
	    @foreach($pkStaffs as $pkStaff)
	        <li>{{ $pkStaff->name }} {{ count($pkStaff->votes) }} / {{ count($pkStaffs) -1 }}</li>
	    @endforeach
	</ul>

</div>

@stop