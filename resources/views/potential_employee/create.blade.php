@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Are you looking to join a dynamic hairdressing team?',
	'keywords' => 'hair recruitment warrington, hairdressing jobs warrington, stylist jobs warrington',
	'ogtitle' => 'We\'re looking for talented, dynamic hairdressers to join our team',
	'ogdescription' => 'In the 15 years we\'ve been around we\'ve built up a strong reputation, winning numerous awards and creating some incredible, cutting edge styles.
	We also pride ourselves in giving the best customer experience. We\'ve built up our team gradually over the years, with ongoing training and development. Regular external and internal training and access to the best products on the market.',
	'ogimage' => url('/') . '/images/potential_fb.jpg',
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
			<div id="photographic">
				<div class="photographic-copy">
					<p>We've entered numerous hairdressing competions and we're heavily into photographic work - <em>check out this image from a shoot we did a few months back.</em></p>
					<div class="photographic-copy-img-1"></div>
					<div class="photographic-copy-img-2"></div>
					<div class="photographic-copy-img-3"></div>
				</div>
				<div class="photographic-image">
					<p>Our take on the Schwarzkopf 'Colorama' colection. <br>Hair by Nat &amp; Laura</p>
				</div>
			</div>
		<div id="testimonials">	
			<h2>See what some of our current team members have to say&hellip;</h2>
			<div class="testimonial">
				<div class="testimonial-img-1"></div>
				<div class="testimonial-copy">
					<h3>Laura Hall (Senior Stylist)</h3>
					<p>&quot;I joined JAKATA over 10 years ago and have seen the salon go from strength to strength over the years. 
					We have ongoing training so we're always up to date with the latest trends. The atmosphere is really relaxed and friendly, whilst being extremely professional.
					&quot;</p>
				</div>
				</div>
			<div class="testimonial">
				<div class="testimonial-img-2"></div>
				<div class="testimonial-copy">
					<h3>Jimmy Sharpe (Salon Manager)</h3>
					<p>&quot;I joined JAKATA as a junior 9 years ago and I've progressed to being manager of both salons! 
					I have had the opportunity to be a member of the Schwarzkopf L.E.A.P team, testament to the fantastic training we get. 
					I Can't wait to get stuck into more photoshoots!&quot;</p>
				</div>
			</div>
			<div class="testimonial">
				<div class="testimonial-img-3"></div>
				<div class="testimonial-copy">
					<h3>Layla Relf (Graduate Stylist)</h3>
					<p>&quot;In just over a year I've been trained from scratch to becoming a Graduate stylist. I have continual one on one training and support from the other team members.
					I always get help and support when I need it as I move up the ranks. I'm now focused on becoming a Senior Stylist!&quot;</p>
				</div>
			</div>
		</div>
		<div class="excitement">
			<p>The exciting news is we're getting ready to move into a brand new, kick-ass salon, 
			a space designed to give the perfect working environment for dynamic stylists. We designed it with the ability to turn it into a photo studio on demand so we can do more frequent shoots - we think you'll love it.</p>
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
		
		{{ Form::hidden('salon', '1') }}
		
		<div class="row">
		{!! Form::label('full_name', 'Full Name') !!}
		{!! Form::text('full_name', old('full_name')) !!}
		{!! $errors->first('full_name', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row">
		{!! Form::label('mobile', 'Mobile Number') !!}
		{!! Form::text('mobile', old('mobile')) !!}
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
		
		{{ Form::hidden('status', 'Not Contacted') }}
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
		
	{!! Form::close() !!}
	
	</div><!-- form -->

	

</div>

@stop