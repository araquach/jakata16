@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'We\'ve moved',
	'keywords' => 'hairdressing, hairdressers, stylists, Jakata, salon',
	'ogtitle' => 'We\'ve moved ',
	'ogdescription' => '',
	'title' => 'Jakata Salon - Relocation - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="relocation">
	
	<div id="relocation_copy">
	
		<h1>We've moved to new premises!</h1>
		
		<p>After months of planning and preperation we're finally making the move to our brand new premises! Although not quite complete, we're at a point where we just need to get ourselves over there!</p>
		<p>We're still waiting on a few items of furniture, imagary and the all important signage, but everything else is ready to go, so we just decided we'd move in and wait for the final pieces to arrive!</p>
		<p>The new address is <strong>27 Rylands Street, Warrington, WA1 1EJ</strong></p>
		<p>It's just round the corner from our current premises (see map) - it's the white building on the corner of Rylands Street and Cairo Street</p>
		<p>We don't have our signage yet so just look for one of our familiar faces through the window! </p>
		<p>Our contact number is the same: 01925 242960</p>
		<p><strong>We look forward to seeing you in our new salon!</strong></p>
		
	</div>
	
	<div id="relocation_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.509883674731!2d-2.59685734846206!3d53.387818379206735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b023ee604efc1%3A0xbbe14f8bab54d21d!2s27+Rylands+St%2C+Warrington!5e0!3m2!1sen!2suk!4v1510859975204" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
</section>
<!--team-->

@stop