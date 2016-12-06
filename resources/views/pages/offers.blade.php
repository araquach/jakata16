@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, summer offers',
	'ogtitle' => 'Offers',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/offers/offers_0616_meta.jpg',
	'title' => 'Jakata Salon - Hairdressing Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

@include('pages.offers.no_offer')

@stop
