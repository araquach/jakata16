@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	
	])
	
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
	<h1>Hi {{ $user->first_name }}</h1>
	<h2>We want your feedback</h2>
	<p></p>
	<p class="small"></p>
</div> <!--feedback_copy-->

<div class="form">
@include('feedback._form')
</div>

</div> <!--feedback-->
</div> <!--feedback_back-->

@stop