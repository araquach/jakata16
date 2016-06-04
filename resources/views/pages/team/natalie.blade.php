@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Natalie Doxey',
	'keywords' => 'Natalie Doxey, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Natalie Doxey',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Natalie Doxey - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed-ind.js') }}"></script>

<div id="team" class="natalie">
	<section class="team_member_copy">
		<h2>Natalie Doxey</h2>
		<p><strong>Natalie has been with Jakata since 2007. She has recently been promoted to Senior Stylist. She exhibits some incredible creative skills.</strong></p>
		<p>A key player in the winning team at the Redken NYC Awards, Natalie picked up the Style Innovator Trophy.</p> 
		<p>She loves all aspects of creative colour and keeping on trend with the latest styles.</p>
		<p><strong>Favourite Style: </strong> Anything with a creative edge</p>
		<p><strong>Favourite Product: </strong>FibrePlex to create all colour changes</p>
		<p class="price">Average Cut &amp; Colour <br>with Natalie: &pound;100</p>
		
		<a href="{{ URL::to('team') }}#nat" >Back to the full team</a>
	</section> <!--team_member_copy -->
</div>

@stop