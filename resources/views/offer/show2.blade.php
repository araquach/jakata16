@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer',
	'keywords' => 'Jakata, offer, special offer, hairdressing offer',
	'title' => 'Jakata Salon - An even better offer for you - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@if($offer->gender == 'F')

<div id="special_offer2">

@elseif($offer->gender == 'M')

<div id="special_offer2_male">
    
@else()

<div id="special_offer2_generic">

@endif

    @if(Session::has('message'))
    <div class="applicationSuccess">
    {{{ Session::get('message') }}}
    </div>
    @endif
    
    <div id="special_offer_copy">
        
        <h1><strong>An even better offer for {{ $offer->first_name }} {{ $offer->last_name }}</strong></h1>

        <p>We recently sent you an offer {{ $offer->first_name }}, and because we value your custom so much<br> we'd like to give you an even better one!</p> 
        
        <p><strong>{!! getOffer2($offer->stylist_level, $offer->gender) !!}<br>on your next visit</strong></p>
    
        <small>weekdays only - not with any other offer - offer not transferable</small>
        
        <p>Just quote: <strong>1216{{ $offer->stylist_level }}{{ $offer->gender }}</strong> when booking</p>
        
        @include('offer._form')
        
        <p>Offer Ends: 9th December 2016</p> 
        
        <small>Not with any other offer. Not transferable. Weekdays only</small>
        
    </div>


</div>


@stop