@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Jakata Hairdressing offers',
	'keywords' => 'hair offers, salon offers, jakata offers, hairdressing offers',
	'ogtitle' => 'Special Offers',
	'ogdescription' => 'The latest offers available at Jakata',
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Latest Offers - HAirdressers in Warrington'
	])
	
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

	
	{!! link_to('contact', 'Online Booking &amp; Enquiry form', array('class' => 'book_button')) !!}

</section> <!--end #offers-->

@stop
