@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Layla Relf',
	'keywords' => 'Layla Relf, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Layla Relf',
	'ogdescription' => 'Layla joined the team as an apprentice in 2016 and is well on her way to becoming a stylist. 
	She has excelled in her apprentiship and picked up lots of advanced techniques along the way. She has developed a passion for session styling and Photoshoots.',
	'ogimage' => url('/') . '/images/team/layla.jpg',
	'title' => 'Jakata Salon - Layla Relf - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<div id="team">
	
	<div class="proportional">
		<div id="team_image" class="layla"></div>
	</div>
	
	<div id="feedback-container">
		<div id="feedback_feed_ind">
		  	<ul>
		  		@foreach($reviews as $review)
		  	    	<li>&quot;{{ limit_words($review->review) }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
		  		@endforeach
		  	</ul>
		  	<a href="{{ URL::to('reviews/layla') }}">More of Layla's reviews here</a>
		</div> <!--#feedback_feed-->
	</div> <!--#feedback_container-->
	<section class="team_member_copy">
		<h2>Layla Relf</h2>
		
		<p><strong>Layla joined the team as an apprentice in 2016 and is well on her way to becoming a stylist.</strong></p>
		<p>She has excelled in her apprentiship and picked up lots of advanced techniques along the way.</p> 
		<p>She has developed a passion for session styling and Photoshoots.</p>
		<p><strong>Favourite Style: Shorter cuts and bright bold colours using bespoke colouring techniques</strong> </p>
		<p><strong>Favourite Product: Kevin Murphy Hair Resort Spray</strong> </p>
		<p class="price">Average Cut &amp; Colour <br>with Layla: &pound;35</p>
		
		<a href="{{ URL::to('team') }}#layla" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/layla" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section> <!--team_member_copy -->
</div>

@stop