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
		
		@if(url()->current() === url('freeproducts/man'))
			<section id="prospect-offer-image-man"></section>
		@else
			<section id="prospect-offer-image"></section>
		@endif
		
		<p><em>How would you like to get some products tailored to your hair needs sent out to you absolutely <span class="red">FREE?</span><br>
		A selection of shampoo’s, conditioners and styling products could be yours - plus a secret surprise gift!</em></p>
		
		@if(url()->current() === url('freeproducts/man'))
			<a href="{{ URL::to('freeproducts/man/create') }}#prospect-form" class="link">Click here to claim yours!</a>
		@else
			<a href="{{ URL::to('freeproducts/create') }}#prospect-form" class="link">Click here to claim yours!</a>
		@endif
	
	</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop