@extends('layouts.prospect') 

@section('head')

@include('layouts.partials.pros_head', [
	'title' => 'Free Products'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<section id="prospect">

	<section id="prospect-entry">
	
		<h2 class="red">Your route to perfect hair</h2>

		<section id="prospect-offer-image"></section>
		
		<p><em>Choosing a new salon and stylist can be a daunting prospect. We can make it really easy for you!</em><br>
		<p>Simply book in with us for a 'New Client Consultation Package'</p>
		<p>Here's whats involved:</p>
		<ul class ="consultation-list">
			<li>Time out to asses your hair</li>
			<li>Styling advice from an experienced professional</li>
			<li>Discuss future and current fashion trends</li>
			<li>Haircare tips and product information</li>
			<li>A plan set for any recovery you may need</li>
			<li>Start things moving towards achieving the look you want</li>
			<li>Make you aware of any special offers on the day</li>
		</ul>
		
		<p>You'll get to experience the salon and meet our fantastic team. 
			We can discuss all your hair needs, advise you on styling, products and let you know the best route to achieving the hairstyle you've always wanted!</p>
	
		<a href="{{ URL::to('consultation/create') }}#prospect-entry" class="link">Click here for more info</a>

	
	</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop