@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Jimmy Sharpe',
	'keywords' => 'Jimmy Sharpe, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Jimmy Sharpe',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Jimmy Sharpe - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team" class="jimmy">
    <section class="team_member_copy">
		<h2>Jimmy Sharpe</h2>
		<p><strong>Salon manager Jimmy joined Jakata in October 2007 as an apprentice and quickly worked his way up through the ranks.</strong></p>
	    <p>His passion for hairdressing is infectious. His experimental approach ensures he's always pushing the boundaries in cutting, colouring &amp; styling hair.</p>
	    <p>Jimmy was member of the Schwarzkopf L.E.A.P Team</p>
	    <p><strong>Favourite Style: </strong>Short hair cuts</p>
	    <p><strong>Favourite Product: </strong>Schwarzkopf Flex Wax</p>
	    <p class="price">Average Cut &amp; Colour <br>with Jimmy: &pound;110</p>
	    
	    <a href="{{ URL::to('team') }}#jimmy" >Back to the full team</a>
	 </section> <!--team_member_copy -->
</div>

@stop