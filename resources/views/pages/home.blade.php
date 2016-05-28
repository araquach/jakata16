@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'ogimage' => url('/') . '/images/myimage.png',
	'title' => 'Jakata Salon - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/feedback-feed.js') }}"></script>

<div id="home">
<h4 class="slogan">Fashion forward, award winning hairdressing</h4>
<section id="info">
<p>Jakata is a fashion forward, award winning hairdressing salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you're in good hands.</p>
<p>Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve the whole of Warrington and surrounding areas.</p>
<p>If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff.</p>
</section> 

<div id="home_news">

<a href="{{ URL::to('news') }}#InstantBlushes">	
<aside id="news2" class="home_news">
<h3 class="newsheader">New Schwarzkopf Instant Blushes</h3>
<p class="newspara">Add a touch of pastel to enhance your blonde hair&hellip;</p>
<p class="newscenter"><strong>Find out more &gt;</strong></p>
</aside>
</a>

<a href="{{ URL::to('news') }}#EssentialLooksComp">
<aside id="news1" class="home_news">
<h3 class="newsheader">Essential Looks Day</h3>
<p class="newspara">Find out about our recent in-salon competition&hellip;</p>
<p class="newscenter"><strong>Find out more &gt;</strong></p>
</aside>
</a>

<a href="{{ URL::to('recruitment') }}">
<aside id="news3" class="home_news">
<h3 class="newsheader">Great career opportunities at Jakata</h3>
<p class="newspara">We're on the lookout for talented stylists and apprentices</p>
<p class="newscenter"><strong>Find out more here &gt;</strong></p>
</aside>
</a>

</div>

<div id="feedback_feed">
  	<ul>
  	@foreach($feedbacks as $feed)
  	    <li>&quot;{{ $feed->extra_edit }}&quot;<br><span class="client">{{ $feed->client->first_name }} {{ $feed->client->last_name }} - hair by {{ $feed->client->stylist }} </span></li>
  	@endforeach
  	</ul>
</div> <!--#feedback_feed-->

</div>
@stop