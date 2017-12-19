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
	
	<h3>Filter by stylist</h3>
	
	<ul class="stylist-filter">
		<a href="{{ URL::to('reviews/jimmy') }}"><li class="review-jimmy">Jimmy</li></a>
		<a href="{{ URL::to('reviews/hall') }}"><li class="review-laurah">Laura H</li></a>
		<a href="{{ URL::to('reviews/natalie') }}"><li class="review-natalie">Natalie</li></a>
		<a href="{{ URL::to('reviews/vikki') }}"><li class="review-vikki">Vikki</li></a>
		<a href="{{ URL::to('reviews/matt') }}"><li class="review-matt">Matt</li></a>
		<a href="{{ URL::to('reviews/layla') }}"><li class="review-layla">Layla</li></a>
	</ul>
	
	@foreach($reviews as $review)
		<div class="review">
			<p>"{{ $review->review }}"</p>
			<small>{{ remove_client($review->client) }}</small><br>
			<small>Hair by: {{ remove_staff($review->staff) }}</small>
		</div>
	@endforeach
</section>

@stop