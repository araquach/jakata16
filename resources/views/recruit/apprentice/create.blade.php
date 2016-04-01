@extends('layouts.main')

@section('head')
	<meta name="description" content="Apply to be an apprentice at JAKATA">
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
<h1>Join the team: Apprentice Position</h1>
<p>{!! link_to('stylist/create', 'Click here to apply for an stylist position') !!}</p>
<p>At Jakata all of our training is carried out in-house, you gain maximum exposure to observe skilled stylists whilst gaining valuable hands-on experience.</p>
<p><em>Our aim is to train and develop our apprentices to the highest level, in the shortest possible time. This requires the highest level of commitment from you, so if you're expecting an easy ride then Jakata probably isn't for you but if you have the passion to do whatever it takes to be a top stylist then you've come to the right place!</em></p>
<p>link</p>
<p>Please complete ALL sections of the form before submitting your application.</p>
<p>We will contact you as soon as a position becomes available.</p>

@include('recruit.apprentice._form')

</div> <!--application-form-->
</div> <!--application-->

@stop