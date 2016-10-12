@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer',
	'keywords' => 'Jakata, offer, special offer, hairdressing offer',
	'title' => 'Jakata Salon - Special offer for you - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@if($offer->gender == 'F')

<div id="special_offer">

@elseif($offer->gender == 'M')

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
        
        <h1><strong>Special Offer for<br>{{ $offer->first_name }} {{ $offer->last_name }}</strong></h1>

        <p>We've not seen you in the salon<br> for a while {{ $offer->first_name }}, so we'd like to give you this special offer:</p> 
        @if($offer->stylist_level == 'G' & $offer->gender == 'F')
        <p><strong><span class="big">&pound;50<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($offer->stylist_level == 'S' & $offer->gender == 'F')
        <p><strong><span class="big">&pound;60<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($offer->stylist_level == 'SS' & $offer->gender == 'F')
        <p><strong><span class="big">&pound;70<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($offer->stylist_level == 'G' & $offer->gender == 'M')
        <p><strong><span class="big">&pound;10<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($offer->stylist_level == 'S' & $offer->gender == 'M')
        <p><strong><span class="big">&pound;15<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @elseif($offer->stylist_level == 'SS' & $offer->gender == 'M')
        <p><strong><span class="big">&pound;20<br></span>Colour &amp; Cut package<br>on your next visit</strong></p>
        
        @else
        <p><strong><span class="big">&pound;30% off<br></span>your next visit</strong></p>
        @endif
    
        <small>weekdays only - not with any other offer - offer not transferable</small>
        
        <p>Just quote: <strong>1116{{ $offer->stylist_level }}{{ $offer->gender }}</strong> when booking</p>
        
        @include('offer._form')
        
        <p>Offer Ends: 30th November 2016</p> 
        
        <small>Not with any other offer. Not transferable. Weekdays only</small>
        
    </div>


</div>


@stop