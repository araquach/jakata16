@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Natalie Doxey',
	'keywords' => 'Natalie Doxey, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Natalie Doxey',
	'ogdescription' => 'Natalie has been with Jakata since 2007. She has recently been promoted to Senior Stylist. She exhibits some incredible creative skills. 
	A key player in the winning team at the Redken NYC Awards, Natalie picked up the Style Innovator Trophy. She loves all aspects of creative colour and keeping on trend with the latest styles.',
	'ogimage' => url('/') . '/images/team/nat.jpg',
	'title' => 'Jakata Salon - Natalie Doxey - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team" class="natalie">
	<section class="team_member_copy">
		<h2>Natalie Doxey</h2>
		<div id="feedback_feed_ind">
		  	<ul>
		  	@foreach($feedbacks as $feed)
		  	    <li>&quot;{{ $feed->feedback->extra_edit }}&quot;<br><span class="client">{{ $feed->first_name }} {{ $feed->last_name }} - hair by {{ $feed->stylist }} </span></li>
		  	@endforeach
		  	</ul>
		</div> <!--#feedback_feed-->
		<p><strong>Natalie has been with Jakata since 2007. She has recently been promoted to Senior Stylist. She exhibits some incredible creative skills.</strong></p>
		<p>A key player in the winning team at the Redken NYC Awards, Natalie picked up the Style Innovator Trophy.</p> 
		<p>She loves all aspects of creative colour and keeping on trend with the latest styles.</p>
		<p><strong>Favourite Style: </strong> Anything with a creative edge</p>
		<p><strong>Favourite Product: </strong>FibrePlex to create all colour changes</p>
		<p class="price">Average Cut &amp; Colour <br>with Natalie: &pound;100</p>
		
		<a href="{{ URL::to('team') }}#nat" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/natalie" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section> <!--team_member_copy -->
</div>

@stop