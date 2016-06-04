@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Maisie Thompson',
	'keywords' => 'Maisie Thompson, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Maisie Thompson',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Maisie Thompson - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team_members">
	<section class="team_member" id="maisie">
		<h2>Maisie Thompson</h2>
		<section class="team_member_copy">
			<p><strong>Maisie is a well established Jakata team member. She's a senior stylist and has over 9 years experience.</strong></p>
			<p>She loves big, messy, tousled styles with loads of bounce and attitude.</p> 
			<p>Precision, creativity and a strong understanding of an individuals hair are Maisie's focus.</p>
			<p>She has advanced Colour diplomas with Schwarzkopf &amp; La Biostetique. She also loves doing the Kebelo smoothing service</p>
			<p><strong>Favourite Style: </strong>Big, tousled hair</p>
			<p><strong>Favourite Product: </strong>Tigi 'Totally Baked'</p> 
			<p class="price">Average Cut &amp; Colour <br>with Maisie: &pound;100</p>
		</section> <!--team_member_copy -->
	</section> <!--team member maisie-->
</div>

@stop