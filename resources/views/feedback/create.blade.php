@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'title' => 'We want your feedback'
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
	<h1>Hi {{ $client->first_name }} - get a <br>FREE &pound;10 <br>Product Voucher</h1>
	<h2>We want your feedback</h2>
	<p>You recently had your hair done by <strong>{{ $client->stylist }}</strong> and we would love to find out how your experience was in the salon.</p>
	<p>We strive to offer the best possible service, plus give you a hairstyle that you're 100% happy with!</p>
	<p>Just answer the following questions and give us your honest feedback.</p>
	<p><em>You will receive a <strong>&pound;10 product voucher</strong> via text that you can use in the salon at any time!</p>
	<p class="small">The voucher is delivered to your phone via text message. Each voucher has a unique reference number that is married up to your booking on the system. The voucher is not transferrable.<br>
	Your information will not be shared with anyone and is purely for us to ensure we are offering the best possible service along with looking at ways to improve our offering</p>
</div> <!--feedback_copy-->

<div class="form">
@include('feedback._form')
</div>

</div> <!--feedback-->
</div> <!--feedback_back-->

@stop