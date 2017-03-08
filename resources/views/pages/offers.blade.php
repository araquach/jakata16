@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Half price Colour with every Cut, Dry & Style for new clients',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'New Year Offers',
	'ogdescription' => 'Half price Colour with every Cut, Dry & Style for new clients and 30% off Men\'s Cut & Style for new clients',
	'ogimage' => url('/') . '/images/offers/offers_0616_meta.jpg',
	'title' => 'Jakata Salon - Hairdressing Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

@include('pages.offers.no_offer')

@stop
