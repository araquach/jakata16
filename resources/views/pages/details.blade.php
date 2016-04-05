@extends('layouts.main')

@section('content')

@section('head')
	<meta name="description" content="Contact the JAKATA Team for information and advice or to book your appointment">
	<meta name="keywords" content="Hair bookings, hairdressing bookings, book your appointment, Jakata bookings, Jakata information, Jakata advice">
@stop

@section('title')
	<title>Jakata Salon - ContactInformation</title>
@stop

<section id="details">

<div id="details_copy">

<h1>Contact Us</h1>

<p>Jakata is located in the centre of Warrington on Bridge Street. We're extremely close to the <em>Warrington Market multi-storey car park</em> and only a short walk from <em>Golden Square shopping centre.</em></p>
<p>If you're visiting the salon after 6.30 pm you are able to park right outside the salon.</p>

<h2>Address</h2>
<p class="details_text">90/92 Bridge Street<br>
Warrington, Cheshire<br>
WA1 2RF</p>

<h2>Telephone</h2>
<p class="details_text"><strong>01925 242960</strong></p>

<h2>Opening Times</h2>
<ul id="times">
<li>Monday: Closed</li>
<li>Tuesday: 9.00 - 18.00</li>
<li>Wednesday: 11.00 - 20.00</li>
<li>Thursday: 9.00 - 21.00</li>
<li>Friday: 9.00 - 19.00</li>
<li>Saturday: 9.00 - 17.30</li>
<li>Sunday: Closed</li>
</ul>


<h2>Enquiry Form</h2>
<p>If you would like to make an enquiry or make a booking, please click the link below:</p>

{!! link_to('contact', "Online enquiry and booking form", array('class'=>'toForm')) !!}

</div> 
</section> 

@stop
