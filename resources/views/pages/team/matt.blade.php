@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Matt Lane',
	'keywords' => 'Matt Lane, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Matt Lane',
	'ogdescription' => 'Matt is a super-talented stylist that has built up a strong following over the years he\'s been with us.
	He loves getting stuck into creative fashion colouring, he\'s not afraid to push the boundaries.
	After a short spell at our sister salon PK her has made the move back to rejoin the Jakata team',
	'ogimage' => url('/') . '/images/team/matt.jpg',
	'title' => 'Jakata Salon - Matt Lane - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<div id="team">	

	<div class="proportional">
		<div id="team_image" class="matt"></div>
	</div>
	
	<div id="feedback-container">
		<div id="feedback_feed_ind">
		  	<ul>
		  		@foreach($reviews as $review)
		  	    	<li>&quot;{{ limit_words($review->review) }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
		  		@endforeach
		  	</ul>
		  	<a href="{{ URL::to('reviews/matt') }}">More of Matt's reviews here</a>
		</div> <!--#feedback_feed-->
	</div> <!--#feedback_container-->
	<section class="team_member_copy">
		<h2>Matt Lane - Stylist</h2>
		
		<p><strong>Matt is a super-talented stylist that has built up a strong following over the years he's been with us.</strong></p>
		<p>He loves getting stuck into creative fashion colouring, he's not afraid to push the boundaries.</p>
		<p>After a short spell at our sister salon PK he has made the move back to rejoin the Jakata team</p>
		<p><strong>Favourite Style: </strong>Creative colour and wavy, textured looks</p>
		<p><strong>Favourite Product: </strong>Kevin Murphy Doo.Over</p>
		<p class="price">Average Cut &amp; Colour <br>with Matt: &pound;103</p>
		
		<a href="{{ URL::to('team') }}#matt" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/matt" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section> <!--team_member_copy -->
</div>


@stop