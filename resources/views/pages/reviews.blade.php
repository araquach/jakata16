@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Check out this selection of recent client reviews',
	'keywords' => 'hairdressing reviews, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers, hairdressing feedback',
	'ogtitle' => 'See what some of our recent clients said about us...',
	'ogdescription' => $reviews->first()->review,
	'ogimage' => url('/') . '/images/reviews/reviews-meta.jpg',
	'title' => 'Jakata Salon - Reviews - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="reviews">
	
	<h1>Some of our recent client reviews</h1>
	
	@foreach($reviews as $review)
		<div class="review">
			<p>"{{ $review->review }}"</p>
			<small>{{ remove_client($review->client) }}</small><br>
			<small>Hair by: {{ remove_staff($review->staff) }}</small>
		</div>
	@endforeach
</section>
<!--team-->

@stop