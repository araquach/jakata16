@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Laura Minett',
	'keywords' => 'Laura Minett, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Laura Minett',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Laura Minett - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team" class="laura_m">
	<section class="team_member_copy">
		<h2>Laura Minett</h2>
		<p><strong>Laura has recently been promoted to stylist position. She has quickly settled into the team and exhibits loads of natural flair for hairdressing.</strong></p>
		<p>Her warm, friendly personality makes every visit to the salon a relaxing experience.</p>
		<p>She particularly enjoys creative colouring &amp; styling whilst adding her own personal touch.</p>
		<p><strong>Favourite Style: </strong>Soft &amp; Natural styles</p>
		<p><strong>Favourite Product: </strong>Tigi Totally Baked &amp; Osis Dust It</p>
		<p class="price">Average Cut &amp; Colour <br>with Laura M: &pound;90</p>
		
		<a href="{{ URL::to('team') }}#laura_m" >Back to the full team</a>
	</section> <!--team_member_copy -->
</div>

@stop