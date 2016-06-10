@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Half price colour with every cut, dry and style for new clients this summer. Plus 30% off men\'s cuts for new clients.',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, summer offers',
	'ogtitle' => 'Summer Offers',
	'ogdescription' => 'Half price colour with every cut, dry and style for new clients this summer. Plus 30% off men\'s cuts for new clients. ',
	'ogimage' => url('/') . '/images/offers/offers_0616_meta.jpg',
	'title' => 'Jakata Salon - Hairdressing Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

@include('pages.offers.half_price_col')

@stop
