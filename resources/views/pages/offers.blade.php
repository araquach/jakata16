@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	// 'description' => '£60 Colour & Cut Package with stylists or £75 package with a senior stylist. Plus 30% off men\'s cuts for new clients.',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, summer offers',
	'ogtitle' => 'Offers',
	// 'ogdescription' => '£60 Colour & Cut Package with stylists or £75 package with a senior stylist. Plus 30% off men\'s cuts for new clients. ',
	// 'ogimage' => url('/') . '/images/offers/offers_0616_meta.jpg',
	'title' => 'Jakata Salon - Hairdressing Offers - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

@include('pages.offers.package')

@stop
