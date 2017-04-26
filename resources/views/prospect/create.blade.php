@extends('layouts.prospect') 

@section('head')

@include('layouts.partials.pros_head', [
	'title' => 'Free Products'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<section id="prospect">

<section id="prospect-entry">
	
<h2>Claim Your <span class="red">FREE</span> Products</h2>
	
@if(Session::has('message'))
	<div id="success" class="ProspectSuccess">
	<p>{{{ Session::get('message') }}}</p>
	{!! link_to('/', 'Visit our website to find out more about us!') !!}
	</div>
@else

	@if(url()->current() === url('freeproducts/man/create'))
		@include('prospect._form_male')
	@else
		@include('prospect._form')
	@endif

@endif

</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop