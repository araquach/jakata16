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

@elseif($client->gender == 'M')

<div id="special_offer_male">
    
@else()

<div id="special_offer_generic">

@endif

    @if(Session::has('message'))
    <div class="applicationSuccess">
    {{{ Session::get('message') }}}
    </div>
    @endif
    
    <div id="special_offer_copy">
        
        <h1><strong>Special Offer for<br> {{ $client->first_name }} {{ $client->last_name }}</strong></h1>

        <p>We've not seen you in the salon<br> for a while {{ $client->first_name }}, so we'd like to offer you</p> 
        @if($client->stylist_level == 'G' & $client->gender == 'F')
        <p><strong><span class="big">&pound;50<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($client->stylist_level == 'S' & $client->gender == 'F')
        <p><strong><span class="big">&pound;60<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($client->stylist_level == 'SS' & $client->gender == 'F')
        <p><strong><span class="big">&pound;70<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($client->stylist_level == 'G' & $client->gender == 'M')
        <p><strong><span class="big">&pound;10<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($client->stylist_level == 'S' & $client->gender == 'M')
        <p><strong><span class="big">&pound;15<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($client->stylist_level == 'SS' & $client->gender == 'M')
        <p><strong><span class="big">&pound;20<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @else
        <p><strong><span class="big">&pound;30% off<br></span>your next visit</strong></p>
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