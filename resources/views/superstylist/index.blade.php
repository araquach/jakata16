@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="admin">
    
	<h1>Hey {{ explode(' ',trim(Auth::user()->name))[0] }}</h1>
	<h2>vote for your Super Stylist of the month!</h2>
	<p>Select a stylist below to fill in their questionaire</p>
	<p><em>you must complete all stylists questionaires before the end of the month!</em></p>
	
    
        <ul>
            @foreach($users as $user)
                <li><a href="/superstylist/{{ $user->id }}/create">{{ $user->name }}</a></li>
            @endforeach
        </ul>

</div>

@stop