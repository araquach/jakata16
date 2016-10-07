@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer',
	'keywords' => 'Jakata, offer, special offer, hairdressing offer',
	'title' => 'Jakata Salon - Special offer for you - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@if($client->gender = 'f')

<div id="special_offer">

@else()

<div id="special_offer_male">

@endif
    
    <div id="special_offer_copy">
        
        <h1><strong>Special Offer for<br> {{ $client->first_name }} {{ $client->last_name }}</strong></h1>

        <p>We've not seen you in the salon<br> for a while {{ $client->first_name }}, so we'd like to offer you</p> 
        <p class="big"><strong>30% off</strong><br>the total bill</p> 
        <p>on your next visit (including products)</p>
        
        <p>Just quote: <strong>{{-- $client->offerCodeText() --}}</strong> when booking</p>
        
        @include('offer._form')
        
        <p>Offer Ends: {{-- date --}}</p> 
        
        <small>Not with any other offer. Not transferable. Weekdays only</small>
        
    </div>


</div>


@stop