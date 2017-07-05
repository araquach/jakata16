@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<div id="home">
	
	<div class="proportional aspect1">
		<div id="home_image"></div>
		<h4 class="slogan">Fashion forward, award winning hairdressing</h4>
	</div>

	<div id="feedback-container">
		<div id="feedback_feed">
		  	<ul>
		  	@foreach($feedbacks as $feed)
		  	    <li>&quot;{{ $feed->extra_edit }}&quot;<br><span class="client">{{ $feed->client->first_name }} {{ $feed->client->last_name }} - hair by {{ $feed->client->stylist }} </span></li>
		  	@endforeach
		  	</ul>
		</div> <!--#feedback_feed-->
	</div>

	<section id="info">
		<p>Jakata is a fashion forward, award winning hairdressing salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you're in good hands.</p>
		<p>Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve the whole of Warrington and surrounding areas.</p>
		<p>If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff.</p>
	</section> 

	<div id="home_news">
		@foreach($blogs	as $blog)
			<a href="{{ URL::to('blog') }}/{{ $blog->slug }}">
				<aside class="home_news">
					<div class="home_news_pic" style="background: url('{{ $blog->paras()->first()->para_pic }}') no-repeat left top rgba(249, 249, 250, 0.8); background-size: contain;"></div>
					<div class="home_news_copy">
						<h3 class="newsheader">{{ $blog->title }}</h3>
						<p class="newspara">{{ limit_words($blog->paras()->first()->para) }}&hellip;</p>
						<p class="newscenter"><strong>Find out more &gt;</strong></p>
					</div>
				</aside>
			</a>
		@endforeach
	</div>

</div>
@stop