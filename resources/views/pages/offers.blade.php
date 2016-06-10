@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'All the latest JAKATA Offers',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers',
	'ogtitle' => 'Jakata Offers',
	'ogdescription' => 'All the latest Offers from the salon',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Hairdressing Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('pages.offers.half_price_col')

@stop
