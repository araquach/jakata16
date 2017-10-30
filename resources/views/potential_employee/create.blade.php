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
			<div id="photographic">
				<div class="photographic-copy">
					<p>We've entered numerous hairdressing competions over the years and we're heavily into photographic work - <em>check out this image from a shoot we did a few months back.</em></p>
					{{ Html::image('images/potential/shoot3.jpg', 'Behind the scenes', array( 'width' => 160, 'height' => 160 )) }}
					{{ Html::image('images/potential/shoot2.jpg', 'Behind the scenes', array( 'width' => 160, 'height' => 160 )) }}
					{{ Html::image('images/potential/shoot1.jpg', 'Behind the scenes', array( 'width' => 160, 'height' => 160 )) }}
				</div>
				<div class="photographic-image">
					<p>Our take on the Schwarzkopf 'Colorama' colection. <br>Hair by Nat &amp; Laura</p>
				</div>
			</div>
		<h2>See what some of our current team members have to say&hellip;</h2>
		<div class="testimonial">
			<div class="testimonial-img">
				{{ Html::image('images/potential/laura_h.jpg', 'Laura Hall', ['width' => '120', 'class' => 'potential-image']) }}
			</div>
			<div class="testimonial-copy">
				<h3>Laura Hall (Senior Stylist)</h3>
				<p>&quot;I joined JAKATA over 10 years ago and have seen the salon devolop over the years. 
				We have ongoing training so we are always up to date with the latest trends. The atmosphere is relaxed and friendly whilst being extremely proffessional.
				&quot;</p>
			</div>
		</div>
		<div class="testimonial">
			<div class="testimonial-img">
				{{ Html::image('images/potential/jimmy.jpg', 'Laura Hall', ['width' => '120', 'class' => 'potential-image']) }}
			</div>
			<div class="testimonial-copy">
				<h3>Jimmy Sharpe (Salon Manager)</h3>
				<p>&quot;I joined JAKATA as a junior and I've built up to being manager of both salons! 
				I have had the opportunity to be a member of the Schwarzkopf L.E.A.P team, testament to the fantastic training we get. 
				Can't wait to get stuck into more photoshoots!&quot;</p>
			</div>
		</div>
		<div class="testimonial">
			<div class="testimonial-img">
				{{ Html::image('images/potential/layla.jpg', 'Laura Hall', ['width' => '120', 'class' => 'potential-image']) }}
			</div>
			<div class="testimonial-copy">
				<h3>Layla Relf (Graduate Stylist)</h3>
				<p>&quot;In just over a year I've been trained from scratch to becoming a Graduate stylist. I have continual one on one training and support from the other team members.
				I always get help and support when I need it as I move up the ranks. I'm now focused on becomiong a Senior Stylist!&quot;</p>
			</div>
		</div>
		<div class="excitement">
			<p>The exciting news is we're getting ready to move into a brand new, kick-ass salon, 
			a space designed to give the perfect working environment for dynamic stylists. We designed it with the ability to turn it into a photo studio so we can do more frequent shoots - we think you'll love it.</p>
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
		
		{{ Form::hidden('status', 'Not Contacted') }}
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
		
	{!! Form::close() !!}
	
	</div><!-- form -->

	

</div>

@stop