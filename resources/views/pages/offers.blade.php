@extends('layouts.main')

@section('head')
	<meta name="description" content="For all the latest JAKATA offers">
	<meta name="keywords" content="Hair offers, hairdressing offers">
@stop

@section('title')

	<title>Jakata Salon - Hairdressing Offers</title>

@stop

@section('content')

{{-- Need FB meta --}}

<section id="offers">

	<section id="offer1">
	  <h2>Colour &amp; Cut Package</h2>
	  <p>for just &pound;60<br>with any of our Stylists</p>
	    <small><time datetime="2014-06-27">extended until 27/06/14</time><br>
	    For New Clients - not with any other offer. Excludes Saturday<br>Skin test required 48hrs before any colour service</small>
	</section>
	
	<section id="offer2">
	  <h2>30% off Men's Cut &amp; Style</h2>
	  <p>for new clients<br>throughout June</p>
	    <small><time datetime="2014-06-27">extended until 27/06/14</time><br>
	    For New Clients - not with any other offer. Excludes Saturday</small>
	</section>
	
	
	<section id="offer3">
	  <h2>FREE Cut Dry &amp; Style <br>with every<br>Kebelo Advantage Treatment</h2>
	  <p>Throughout the month of June</p>
	    <small>extended until <time datetime="2014-06-27">27/06/14</time><br>
	    Not with any other offer. Excludes Saturday<br></small>
	</section>

	
	{{-- create link --}}
	<p id="book_button">Online enquiry and booking form</p>

</section> <!--end #offers-->

@stop
