@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Matt\s Back at Jakata!',
	'keywords' => 'hairdressing, hairdressers, stylists, Jakata, salon',
	'ogtitle' => 'Matt\s Back at Jakata!',
	'ogdescription' => 'After a few months over at our sister salon Paul Kemp Hairdressing Matt has decided to return to Jakata',
	'title' => 'Jakata Salon - Relocation - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="mattsback">
	
	<div id="mattsback_copy">
	
		<h1>Matt's returning to Jakata!</h1>
		
		<p>After spending a few months over at our sister salon Paul Kemp Hairdressing, Matt Lane has made the decision to return to Jakata!</p>
		<p>He moved over there to fill a gap at stylist level that we needed at the time, but with the relocation to our new premises it made sense for him to come back over.</p>
		<p>He enjoyed the experience of working with a new team but is looking forward to experiencing the new salon and rejoining the Jakata team - and we hope you'll enjoy it too!</p>
		<p>The new salon is close to both PK and our old site. The address is:</p>
		<p><strong>27 Rylands Street<br>Warrington<br>WA1 1EJ</strong></p>
		<p>We're the white building on the corner of Rylands Street and Cairo Street<Street></Street></p>
		<p>(please refer to the map)</p>
		<p>Our contact number is the same: 01925 242960</p>
		
		<p>you can also call Paul Kemp Hairdressing on 01925 444488 if you need to ask any questions</p>
		
		<p>All of Matt's appointments have been transferred to the new site</p>

		<p><strong>We look forward to seeing you in our new salon!</strong></p>
		
	</div>
	
	<div id="relocation_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.509883674731!2d-2.59685734846206!3d53.387818379206735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b023ee604efc1%3A0xbbe14f8bab54d21d!2s27+Rylands+St%2C+Warrington!5e0!3m2!1sen!2suk!4v1510859975204" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
</section>
<!--team-->

@stop