@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="superstylist">

    @if(Session::has('message'))
        <div class="applicationSuccess">
        {{{ Session::get('message') }}}
        </div>
    @endif

    <div id="feedback">

        <div id="feedback_copy">
        	<h1>Hey {{ explode(' ',trim(Auth::user()->name))[0] }}</h1>
        	<h2>Vote for {{ $user->name }}</h2>
        	<p>Rank {{ $user->name }} 1 - 5 in each catagory (5 being Super Stylist to 1 being BAD!)</p>
        	<p>The ranking is all about <b>Super Stylist</b> mentality.</p>
        	<p>If you vote either 1 or 5 on any catagory you must put a description as to why.</p>
        	<p class="small">Your vote is completely anonymous</p>
        </div> <!--feedback_copy-->
    
        <div class="form">
            @include('superstylist._form')
        </div>

    </div>
</div>

@stop