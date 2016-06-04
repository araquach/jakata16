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

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team">			
	<section class="team_member_copy">
		<h2>Vicky Rowland</h2>
		<p><strong>Vicky is a highly experienced stylist with a passion for all things vintage.</strong></p>
		<p>Her time with the Hair Cuttery gave her a strong customer service focus. She's an expert in cutting &amp; colouring and loves vintage up-do's</p>
		<p>Vicky's unique personal style definitely reflects in her innovative creations in the salon. </p>
		<p><strong>Favourite Style: </strong> Anything Vintage</p>
		<p><strong>Favourite Product: </strong>Catwalk Weightless Shine Spray</p>
		<p class="price">Average Cut &amp; Colour <br>with Vicky: &pound;90</p>
		
		<a href="{{ URL::to('team') }}" >Back to the full team</a>
	</section> <!--team_member_copy -->
</div>


@stop