@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Vikki Rowland',
	'keywords' => 'Vikki Rowland, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Vikki Rowland',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Vikki Rowland - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team" class="vikki">	
	<section class="team_member_copy">
		<h2>Vikki Rowland</h2>
		<div id="feedback_feed_ind">
		  	<ul>
		  	@foreach($feedbacks as $feed)
		  	    <li>&quot;{{ $feed->feedback->extra_edit }}&quot;<br><span class="client">{{ $feed->first_name }} {{ $feed->last_name }} - hair by {{ $feed->stylist }} </span></li>
		  	@endforeach
		  	</ul>
		</div> <!--#feedback_feed-->
		<p><strong>Vikki is a highly experienced stylist with a passion for all things vintage.</strong></p>
		<p>Her time with the Hair Cuttery gave her a strong customer service focus. She's an expert in cutting &amp; colouring and loves vintage up-do's</p>
		<p>Vikki's unique personal style definitely reflects in her innovative creations in the salon. </p>
		<p><strong>Favourite Style: </strong> Anything Vintage</p>
		<p><strong>Favourite Product: </strong>Catwalk Weightless Shine Spray</p>
		<p class="price">Average Cut &amp; Colour <br>with Vikki: &pound;90</p>
		
		<a href="{{ URL::to('team') }}#vikki" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/vikki" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section> <!--team_member_copy -->
</div>


@stop