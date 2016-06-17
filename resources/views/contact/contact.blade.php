@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Contact Jakata',
	'keywords' => 'contact hairdressers, Jakata enquiries, hairdressing enquiry, salon contact',
	'ogtitle' => 'Contact Us',
	'ogdescription' => 'Contact the JAKATA Team for information and advice or to book your appointment',
	'title' => 'Jakata Salon - Contact Us - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id= "contact">

@if(Session::has('message'))
    <div class="alert alert-info">
		{{{ Session::get('message') }}}
    </div>
@endif

<div id="formWrap">

<h1>Contact Us</h1>

<p>Please fill in as much information as possible in the form below. If you wish to make an appointment state the preferred date and time plus the service you require</p>



<div id="form" class="form">

<ul>
    @foreach($errors->all() as $error)
        <li>{{{ $error }}}</li>
    @endforeach
</ul>

{!! Form::open(array('action' => 'ContactController@sendEmail', 'class' => 'form')) !!}

	<div class="row">
	{!! Form::label('first_name', 'First Name') !!}
	{!! Form::text('first_name', old('first_name')) !!}
	{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('second_name', 'Second Name') !!}
	{!! Form::text('second_name', old('second_name')) !!}
	{!! $errors->first('second_name', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('email', 'Email Address') !!}
	{!! Form::email('email', old('email')) !!}
	{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('email_confirm', 'Confirm Email Address') !!}
	{!! Form::email('email_confirm') !!}
	{!! $errors->first('email_confirm', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('mobile', 'Contact Number') !!}
	{!! Form::text('mobile', old('mobile')) !!}
	{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
	{!! Form::label('body', 'Your Message') !!}
	{!! Form::textarea('body', old('body')) !!}
	{!! $errors->first('body', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row buttons">
	{!! Form::submit('Submit') !!}
	</div>
	
{!! Form::close() !!}

</div><!-- form -->
</div><!-- formWrap -->

</section> <!--end contact-->

@stop