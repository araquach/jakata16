@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Jakata is located in the centre of Warrington on Bridge Street. We\'re extremely close to the Warrington Market multi-storey car park and only a short walk from <em>Golden Square shopping centre',
	'keywords' => 'Hair bookings, hairdressing bookings, book your appointment, Jakata bookings, Jakata information, Jakata advice',
	'ogtitle' => 'Contact Jakata',
	'ogdescription' => 'Jakata is located in the centre of Warrington on Bridge Street. We\'re extremely close to the Warrington Market multi-storey car park and only a short walk from <em>Golden Square shopping centre',
	'title' => 'Jakata Salon - Contact Us'
	])
	
@stop

@section('content')

<section id="details">

<div id="details_copy">

<h1>Contact Us</h1>

<p>Jakata is located in the centre of Warrington on Rylands Street. We're extremely close to the <em>Warrington Market multi-storey car park</em> and only a short walk from <em>Golden Square shopping centre.</em></p>

<h2>Address</h2>
<p class="details_text">27 Rylands Street<br>
Warrington, Cheshire<br>
WA1 1EJ</p>

<h2>Telephone</h2>
<p class="details_text"><strong>01925 242960</strong></p>

<h2>Opening Times</h2>
<ul id="times">
<li>Monday: Closed</li>
<li>Tuesday: 9.00 - 18.00</li>
<li>Wednesday: 11.00 - 20.00</li>
<li>Thursday: 11.00 - 21.00</li>
<li>Friday: 9.00 - 19.00</li>
<li>Saturday: 8.00 - 17.30</li>
<li>Sunday: Closed</li>
</ul>


<h2>Enquiry Form</h2>
<p>If you would like to make an enquiry or make a booking, please click the link below:</p>

{!! link_to('contact', "Online enquiry and booking form", array('class'=>'toForm')) !!}

</div> 
</section> 

@stop
