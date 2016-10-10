@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer',
	'keywords' => 'Jakata, offer, special offer, hairdressing offer',
	'title' => 'Jakata Salon - Special offer for you - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@if($client->gender == 'F')

<div id="special_offer">

@else()

<div id="special_offer_male">

@endif

    @if(Session::has('message'))
    <div class="applicationSuccess">
    {{{ Session::get('message') }}}
    </div>
    @endif
    
    <div id="special_offer_copy">
        
        <h1><strong>Special Offer for<br> {{ $client->first_name }} {{ $client->last_name }}</strong></h1>

        <p>We've not seen you in the salon<br> for a while {{ $client->first_name }}, so we'd like to offer you</p> 
        @if($client->stylist_level == 'SS')
        <p class="big"><strong>30% off</strong></p>
        @elseif($client->stylist_level == 'S')
        <p class="big"><strong>20% off</strong></p>
        @else
        <p class="big"><strong>10% off</strong></p>
        @endif
        <p><strong>your next visit</strong></p>
        <small>weekdays only - not with any other offer - offer not transferable</small>
        
        <p>Just quote: <strong>1116{{ $client->stylist_level }}{{ $client->gender }}</strong> when booking</p>
        
        @include('offer._form')
        
        <p>Offer Ends: 30th November 2016</p> 
        
        <small>Not with any other offer. Not transferable. Weekdays only</small>
        
    </div>


</div>


@stop