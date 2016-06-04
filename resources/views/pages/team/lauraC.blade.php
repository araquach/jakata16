@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Laura Hall',
	'keywords' => 'LAura Hall, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Laura Hall',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Laura Hall - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team_members">
	<section class="team_member" id="laura">
		<h2>Laura Hall</h2>
		<section class="team_member_copy">
			<p><strong>Laura has been hairdressing for 8 years and joined Jakata in 2005. That makes her the longest serving team member (apart from Adam).</strong></p>
			<p>Laura loves classic styling plus technical services like Opti-Smooth and Kebelo.</p>
			<p>Laura strongly believes using the right products is the key to maintaining a new hairstyle.</p>
			<p><strong>Favourite Style: </strong>Any kind of hair-up</p>
			<p><strong>Favourite Product:</strong> Any of the Tigi Candy Fixations Range</p>
			<p class="price">Average Cut &amp; Colour
			<br>with Laura: &pound;100</p>
		</section>
		<!--team_member_copy -->
	</section>
	<!--team member laura-->
</div>		

@stop