@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Recruitment Admin'
	])
	
@stop

@section('content')

<div id="recruitBlank">

<h1>Apprentices</h1>

@foreach($apprentices as $apprentice)

<div class="view">
    
<a href="/apprentice/{{ $apprentice->id }}">{{ $apprentice->id }}. {{ $apprentice->first_name }} {{ $apprentice->second_name }}</a>

</div>

@endforeach

</div> <!--recruitBlank-->

@stop