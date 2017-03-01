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
	<h1>Hey {{ explode(' ',trim(Auth::user()->name))[0] }}</h1>
	<h2>vote for your Super Stylist of the month</h2>
	<p></p>
	<p class="small"></p>
</div> <!--feedback_copy-->

<div class="form">
@include('superstylist._form')
</div>

</div> <!--feedback-->
</div> <!--feedback_back-->

@stop