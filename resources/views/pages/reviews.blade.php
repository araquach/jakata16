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
	
	<ul class="stylist-filter">
		<li class="review-adam"><a href="{{ URL::to('reviews/adam') }}">Adam</a></li>
		<li class="review-jimmy"><a href="{{ URL::to('reviews/jimmy') }}">Jimmy</a></li>
		<li class="review-laurah"><a href="{{ URL::to('reviews/hall') }}">Laura H</a></li>
		<li class="review-natalie"><a href="{{ URL::to('reviews/natalie') }}">Natalie</a></li>
		<li class="review-maisie"><a href="{{ URL::to('reviews/maisie') }}">Maisie</a></li>
		<li class="review-caleb"><a href="{{ URL::to('reviews/caleb') }}">Caleb</a></li>
		<li class="review-lauram"><a href="{{ URL::to('reviews/minett') }}">Laura M</a></li>
		<li class="review-vikki"><a href="{{ URL::to('reviews/vikki') }}">Vikki</a></li>
		<li class="review-layla"><a href="{{ URL::to('reviews/layla') }}">Layla</a></li>
	</ul>
	
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