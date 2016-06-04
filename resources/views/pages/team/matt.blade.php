@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Matthew Lane',
	'keywords' => 'Matthew Lane, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Matthew Lane',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Matthew Lane - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team" class="matt">
	<section class="team_member_copy">
		<h2>Matthew Lane</h2>
		<p><strong>Matthew Lane joined the team in 2014 after previously studying art.</strong></p>
		<p>He’s quickly establishing himself in the salon thanks to his passion for hairdressing and his friendly personality.</p>
		<p>His love of art shines through with his bold, expressive colour and cuts.</p>
		<p><strong>Favourite Style: </strong>Loves tailoring styles to suit the individual</p>
		<p><strong>Favourite Product: </strong>Tigi Small Talk</p>
		<p class="price">Average Cut &amp; Colour <br>with Matt: &pound;90</p>
		
		<a href="{{ URL::to('team') }}#matt" >Back to the full team</a>
	</section> <!--team_member_copy -->
</div>

@stop