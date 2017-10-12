@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'The Jakata Hairdressing Team',
	'keywords' => 'hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Meet the Team',
	'ogdescription' => 'The Jakata team comprises of ten skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward look.',
	'title' => 'Jakata Salon - Meet the team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="team_shot"></div>
<section id="team">
	<section id="team_overview">
		<h1>The Team</h1>
		<p>The Jakata team comprises of seven skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
		<p>Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward
			look.</p>
		<p>A year ago the team divided into two when we opened our sister salon <a href="http://www.paulkemphairdressing.com" target="_blank">Paul Kemp Hairdressing</a> due to outgrowing our Bridge Street premises. Both teams continue to grow both in number and
			skill.</p>
		<p><em>It's difficult to find a stylist well suited to your needs, take the time to read each staff members profile to find the right fit for you. Prices for each stylist vary dependant on a number of factors (experience, specialised skills, high demand etc.)</em></p>
		<p><strong>Please call to arrange for a complimentary consultation with any of our team members.</strong></p>
	</section>
	<!--team_overview-->

	<div id="team_members">
		<a href="{{ URL::to('jimmy') }}" >
			<section class="team_member" id="jimmy">
				<h2>Jimmy Sharpe</h2>
			</section> <!--team member jimmy-->
		</a>
		
		<a href="{{ URL::to('lauraC') }}" >
			<section class="team_member" id="laura">
				<h2>Laura Hall</h2>
			</section><!--team member laura-->
		</a>
		
		<a href="{{ URL::to('natalie') }}" >
			<section class="team_member" id="nat">
				<h2>Natalie Doxey</h2>
			</section> <!--team member nat-->
		</a>
		
		<a href="{{ URL::to('vikki') }}" >
			<section class="team_member" id="vikki">
				<h2>Vickki Rowland</h2>
			</section> <!--team member vicky-->
		</a>
		
		<a href="{{ URL::to('caleb') }}" >
			<section class="team_member" id="caleb">
				<h2>Caleb Barrie</h2>
			</section> <!--team member caleb-->
		</a>
		
		<a href="{{ URL::to('layla') }}" >
			<section class="team_member" id="layla">
				<h2>Layla Relf</h2>
			</section> <!--team member layla -->
		</a>
	</div>
	<!--team_members-->
</section>
<!--team-->

@stop