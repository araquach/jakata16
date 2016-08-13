@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Stylist Applicants'
	])
	
@stop

@section('content')

<div id="recruitBlank">

<h1>Stylist Applicants</h1>

@foreach($stylists as $stylist)

<div class="view">
    
<a href="/stylist/{{ $stylist->id }}">{{ $stylist->id }}. {{ $stylist->first_name }} {{ $stylist->second_name }}</a>
</div>

@endforeach

</div> <!--recruitBlank-->

@stop