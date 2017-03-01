@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="feedback_back">

@if(Session::has('message'))
    <div class="applicationSuccess">
    {{{ Session::get('message') }}}
    </div>
@endif

<div id="feedback">

<div id="feedback_copy">
	<h1>Super Stylist of the month</h1>
	<h2>Rate your colleagues</h2>
	<p></p>
	<p class="small"></p>
</div> <!--feedback_copy-->

<div class="form">
@include('superstylist._form')
</div>

</div> <!--feedback-->
</div> <!--feedback_back-->

@stop