@extends('layouts.main')

@section('content')

@section('title')

	<title>Jakata Salon - Hairdressers in Warrington</title>

@stop

<div id="home">
<h4 class="slogan">Fashion forward, award winning hairdressing</h4>
<section id="info">
<p>Jakata is a fashion forward, award winning hairdressing salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you're in good hands.</p>
<p>Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve the whole of Warrington and surrounding areas.</p>
<p>If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff.</p>
</section> 

<div id="home_news">

<a href="{{ URL::to('news') }}#Fibreplex">	
<aside id="news2" class="home_news">
<h3 class="newsheader">Love colour but hate the damage?</h3>
<p class="newspara">Lighten, lift, colour without compromise&hellip;</p>
<p class="newscenter"><strong>Find out more &gt;</strong></p>
</aside>
</a>

<a href="{{ URL::to('news') }}#ColorMasters">
<aside id="news1" class="home_news">
<h3 class="newsheader">Colour Masters</h3>
<p class="newspara">The Jakata team pushes colouring skills to next level&hellip;</p>
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

	</ul>
</div>

</div>
@stop