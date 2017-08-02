@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="admin">
    
	<h1>Hey {{ explode(' ',trim(Auth::user()->name))[0] }}</h1>
	<h2>Please complete your customer service votes!</h2>
	
	
	<p>Select a stylist below to fill in their questionaire</p>
	<p><em>you must complete all stylists questionaires before the end of the week!</em></p>
	
        
        @if(count($users) < 1)
        <p><strong>Thanks for submitting everyones questionaires {{ explode(' ',trim(Auth::user()->name))[0] }}!</strong></p>
        <p>The new ones will need filling in next week.</p>
        @endif
        <ul>
            @foreach($users as $user)
                    <li><a href="/superstylist/{{ $user->id }}/create">{{ $user->name }}</a></li>
            @endforeach
        </ul>

</div>

@stop