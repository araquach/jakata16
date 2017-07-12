@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Jakata is located in the centre of Warrington on Bridge Street. We\'re extremely close to the Warrington Market multi-storey car park and only a short walk from <em>Golden Square shopping centre',
	'keywords' => 'Hair bookings, hairdressing bookings, book your appointment, Jakata bookings, Jakata information, Jakata advice',
	'ogtitle' => 'Book an Appointment',
	'ogdescription' => 'Use our online booking system to book your next appointment. Please note a skin test is required 48hrs before a colour service',
	'title' => 'Jakata Salon - Book an appointment'
	])
	
@stop

@section('content')

<section id="bookings">

    <section>
        <div class="iframe-container">
            <iframe src="https://jakatasalon.phorest.me/book#/" width="850" height="800" frameborder="0"></iframe>
        </div>
    </section>

</section> 

@stop
