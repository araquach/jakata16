@extends('layouts.main')

@section('head')
	<meta name="description" content="Join the JAKATA team, apply to be a stylist">
	<meta name="keywords" content="Hair jobs, hairdressing jobs, hair recruitment, hairdressing recruitment">
@stop

@section('content')

<script type="text/javascript">
window.addEvent('domready', function(){
	  
	  var myAccordion = new Fx.Accordion($$('.reveal'), $$('.elements'), {
	      display: 0,
	      alwaysHide: true
	  });
	  
});
</script>

<div id="application">
@if(Session::has('message'))
	<div class="applicationSuccess">
	{{{ Session::get('message') }}}
	</div>
@endif

<div id="application-form">
<h1>Join the team: Stylist Position</h1>
<p>{!! link_to('apprentice/create', 'Click here to apply for an apprentice position') !!}</p>
<p>Please complete ALL sections of the form before submitting your application.</p>
<p>We will contact you as soon as a position becomes available.</p>

@include('recruit.stylist._form')

</div> 
</div> 

@stop