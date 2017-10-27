@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Are you looking to join a dynamic hairdressing team?',
	'keywords' => 'hair recruitment warrington, hairdressing jobs warrington, stylist jobs warrington, ',
	'ogtitle' => 'Are you looking to join a dynamic hairdressing team?',
	'ogdescription' => 'Join Our Team',
	'ogimage' => url('/') . '/images/',
	'title' => 'Jakata Salon - Join Our Hairdressing Team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="potential">
	
	<div id="potential-copy">
		
		@if(Session::has('message'))
	        <div class="alert alert-info">
	    		{{{ Session::get('message') }}}
	        </div>
    	@endif
	
		<h1>We're looking for talented, dynamic hairdressers to join our team!</h1>
		<p><strong>Jakata is a fashion forward hair salon based in Warrington town centre.</strong></p>
		<p>In the 15 years we've been around we've built up a strong reputation, winning numerous awards and creating some incredible, cutting edge styles. 
		<em>We also pride ourselves in giving the best customer experience <a href="{{ URL::to('reviews') }}">(just check out our reviews here if you don't believe us!)</a></em></p>
		<p>We've built up our team gradually over the years, with ongoing training and development. Regular external and internal training and access to the best products on the market.</p>
		<p>We've entered numerous hairdressing competions over the years and we're heavily into photographic work - check out this shot from a shoot we did a few months back.</p>
		<p><strong><em>See what some of our current team members have to say&hellip;</em></strong></p>
		<div class="testimonial">
			<div class="testimonial-img">
				{{ Html::image('images/potential_employee/laura.jpg', 'Laura Hall', ['class' => 'potential-image']) }}
			</div>
			<div class="testimonial-copy">
				<h3>Laura Hall (Senior Stylist)</h3>
				<p>Lauras info</p>
			</div>
		</div>
		<div class="testimonial">
			<div class="testimonial-img">
				{{ Html::image('images/potential_employee/layla.jpg', 'Layla Relf', ['class' => 'potential-image']) }}
			</div>
			<div class="testimonial-copy">
				<h3>Jimmy Sharpe (Salon Manager)</h3>
				<p>Jim's info</p>
			</div>
		</div>
		<div class="testimonial">
			<div class="testimonial-img">
				{{ Html::image('images/potential_employee/layla.jpg', 'Layla Relf', ['class' => 'potential-image']) }}
			</div>
			<div class="testimonial-copy">
				<h3>Layla Relf (Graduate Stylist)</h3>
				<p>Layla's info</p>
			</div>
		</div>
		<div class="excitement">
		<p>The exciting news is we're getting ready to move into a brand new, kick-ass salon, 
		a space designed to give the perfect working environment for dynamic stylists. We designed it with the ability to turn it into a photo studio so we can do more frequent shoots - we think you would love it.</p>
		<p><strong>If you're interested in joining our team just leave your details here and we'll be in touch!</strong></p>
		</div>
		
	</div>
		
	<div id="form" class="potential form">
	
	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    @endforeach
	</ul>
	
	{!! Form::open(array('action' => 'PotentialEmployeeController@store', 'class' => 'form')) !!}
	
		<h2>Your details</h2>
		
		<div class="row">
		{!! Form::label('full_name', 'Full Name') !!}
		{!! Form::text('full_name') !!}
		{!! $errors->first('full_name', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row">
		{!! Form::label('mobile', 'Mobile Number') !!}
		{!! Form::text('mobile') !!}
		{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row">
		{!! Form::label('position', 'Current Position') !!}
		{!! Form::select('position', array(
			'senior stylist' => 'Senior Stylist',
			'stylist' => 'Stylist',
			'apprentice' => 'Apprentice/Junior',
			'chairrenter' => 'Self employed/Chair renter',
			'new to hairdressing'=> 'New To Hairdressing',
			'other'=> 'Other',
			), old('position'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('position', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
		
	{!! Form::close() !!}
	
	</div><!-- form -->

	

</div>

@stop