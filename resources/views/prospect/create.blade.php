@extends('layouts.prospect') 

@section('head')

@include('layouts.partials.pros_head', [
	'title' => 'Free Products'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<section id="prospect">

<section id="prospect-entry">

<h2>Claim Your <span class="red">FREE</span> Products</h2>

@include('prospect._form')

</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop