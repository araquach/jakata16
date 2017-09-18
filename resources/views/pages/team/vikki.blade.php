@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Vikki Rowland',
	'keywords' => 'Vikki Rowland, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Vikki Rowland',
	'ogdescription' => 'Vikki is a highly experienced stylist with a passion for all things vintage. 
	Her time with the Hair Cuttery gave her a strong customer service focus. She\'s an expert in cutting & colouring and loves vintage up-do\'s. 
	Vikki\'s unique personal style definitely reflects in her innovative creations in the salon.',
	'ogimage' => url('/') . '/images/team/vicky.jpg',
	'title' => 'Jakata Salon - Vikki Rowland - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<div id="team">	

	<div class="proportional">
		<div id="team_image" class="vikki"></div>
	</div>
	
	<div id="feedback-container">
		<div id="feedback_feed_ind">
		  	<ul>
		  		@foreach($reviews as $review)
		  	    	<li>&quot;{{ limit_words($review->review) }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
		  		@endforeach
		  	</ul>
		  	<a href="{{ URL::to('reviews/vikki') }}">More of Vikki's reviews here</a>
		</div> <!--#feedback_feed-->
	</div> <!--#feedback_container-->
	<section class="team_member_copy">
		<h2>Vikki Rowland</h2>
		
		<p><strong>Vikki is a highly experienced stylist with a passion for all things vintage.</strong></p>
		<p>Her time with the Hair Cuttery gave her a strong customer service focus. She's an expert in cutting &amp; colouring and loves vintage up-do's</p>
		<p>Vikki's unique personal style definitely reflects in her innovative creations in the salon. </p>
		<p><strong>Favourite Style: </strong> Anything Vintage</p>
		<p><strong>Favourite Product: </strong>Catwalk Weightless Shine Spray</p>
		<p class="price">Average Cut &amp; Colour <br>with Vikki: &pound;90</p>
		
		<a href="{{ URL::to('team') }}#vikki" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/vikki" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section> <!--team_member_copy -->
</div>


@stop