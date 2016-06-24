@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Laura Hall',
	'keywords' => 'Laura Hall, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Laura Hall',
	'ogdescription' => 'Laura has been hairdressing for 8 years and joined Jakata in 2005. That makes her the longest serving team member (apart from Adam).
	Laura loves classic styling plus technical services like Opti-Smooth and Kebelo. Laura strongly believes using the right products is the key to maintaining a new hairstyle.',
	'ogimage' => url('/') . '/images/team/laura.jpg',
	'title' => 'Jakata Salon - Laura Hall - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<div id="team">
	
	<div class="proportional">
		<div id="team_image" class="laura_c"></div>
	</div>
	
	<div id="feedback-container">
		<div id="feedback_feed_ind">
		  	<ul>
		  		@foreach($feedbacks as $feed)
		  	    	<li>&quot;{{ $feed->feedback->extra_edit }}&quot;<br><span class="client">{{ $feed->first_name }} {{ $feed->last_name }} - hair by {{ $feed->stylist }} </span></li>
		  		@endforeach
		  	</ul>
		</div> <!--#feedback_feed-->
	</div> <!--#feedback_container-->
	
	<section class="team_member_copy">
		<h2>Laura Hall</h2>
		
		<p><strong>Laura has been hairdressing for 8 years and joined Jakata in 2005. That makes her the longest serving team member (apart from Adam).</strong></p>
		<p>Laura loves classic styling plus technical services like Opti-Smooth and Kebelo.</p>
		<p>Laura strongly believes using the right products is the key to maintaining a new hairstyle.</p>
		<p><strong>Favourite Style: </strong>Any kind of hair-up</p>
		<p><strong>Favourite Product:</strong> Any of the Tigi Candy Fixations Range</p>
		<p class="price">Average Cut &amp; Colour with Laura: &pound;100</p>
		
		<a href="{{ URL::to('team') }}#laura" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/lauraC" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section><!--team_member_copy -->
	
</div>		

@stop