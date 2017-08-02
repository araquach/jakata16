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
        	<p>Rank {{ explode(' ',trim($user->name))[0] }} in each catagory.</p>
        	<p>The ranking is all about <b>customer service</b></p>
        	<p class="small">Your vote is completely anonymous</p>
        </div> <!--feedback_copy-->
    
        <div class="form">
            @include('customerservice._form')
        </div>

    </div>
</div>

@stop