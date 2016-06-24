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


<section id="prospect-offer-image"></section>

<p><em>How would you like to get some products tailored to your hair needs sent out to you absolutely <span class="red">FREE?</span><br>
A selection of shampoo’s, conditioners and styling products could be yours - plus a secret surprise gift!</em></p>


{{-- link to get the form displayed --}}
<a>Click here to claim yours!</a>

</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop