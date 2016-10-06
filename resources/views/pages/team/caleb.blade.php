@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Caleb Barrie',
	'keywords' => 'Caleb Barrie, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Caleb Barrie',
	'ogdescription' => 'Caleb is a diverse stylist with a real passion for hairdressing. He\'s a recent addition to the team. He\’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry\’s.',
	'ogimage' => url('/') . '/images/team/caleb.jpg',
	'title' => 'Jakata Salon - Caleb Barrie - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>


<div id="team">
	
	<div class="proportional">
		<div id="team_image" class="caleb"></div>
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
    	
		<h2>Caleb Barrie</h2>
		<p><strong>Caleb is a diverse stylist with a real passion for hairdressing. He's a recent addition to the team.</strong></p>
		<p>He joined us after moving on a busy Frodsham salon.</p>
	    <p>He’s highly skilled in all aspects of hairdressing but loves high-fashion colouring and big, bouncy blow dry’s.</p>
	    <p></p>
	    <p><strong>Favourite Style: </strong>Sexy beach waves and braids</p>
	    <p><strong>Favourite Product: </strong>Schwarzkopf Soft Glam Smooth Polish</p>
	    <p class="price">Average Cut &amp; Colour <br>with Caleb: &pound;90</p>
	    
	    <a href="{{ URL::to('team') }}#caleb" >Back to the full team</a>
	    
	    <div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/caleb" data-width="250" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	 </section> <!--team_member_copy -->
</div>

@stop