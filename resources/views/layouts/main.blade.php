<!DOCTYPE HTML>
<html class="no-js">

<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
@section('head')
	<meta name="description" content="Jakata is a fashion forward, award winning hair salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you're in good hands. Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn. If you're looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you'll be blown away by our friendly, approachable staff. Jakata, 90/92 Bridge Street, Warrington, WA1 2RF, 01925 242960">
	<meta name="keywords" content="hair, hairdressers, hairdressing, hairdressers in Warrington, men's hairdresing, fashion colour, brazilian blowdry, wedding hair, Daniel Anderson, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn">

	<meta name="author" content="Contra Design">
	<meta name="viewport" content="width=device-width" />

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fonts/fonts.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jakstyles.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/form.css') }}" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 640px), only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait)" href="{{ URL::asset('css/mobile.css') }}"
	/>

	<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools-core.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools-more.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/selectivizr-min.js') }}"></script>
@section('title')
	<title>Jakata Salon - Hairdressers in Warrington</title>
@show
</head>

<body>

	<div class="container" id="page">

		<header class="group">
			<div id="logo" class="logo"></div>
			<h1>Jakata Salon</h1>
			<h2>Hairdressers in Warrington</h2>

			<nav class="group">
				<ul>
					<li>{!! link_to('/', 'Home') !!}</li>
					<li>{!! link_to('offers', 'Offers') !!}</li>
					<li>{!! link_to('team', 'Team') !!}</li>
					<li>{!! link_to('prices', 'Prices') !!}</li>
					<li>{!! link_to('news', 'News') !!}</li>
					<li>{!! link_to('details', 'Contact') !!}</li>
				</ul>
			</nav>
		</header>

		<div id="content">
			@yield('content')
		</div>

		<div class="clear group"></div>

		<footer>

			<section id="prodlogos">
				<ul id="prodcomps">
					<li>
						<a href="http://www.schwarzkopf-professional.com"><img src={{ asset( 'images/footer/footer-01.png') }} alt="One"></a>
					</li>
					<li>
						<a href="http://www.schwarzkopf-professional.com"><img src={{ asset( 'images/footer/footer-02.png') }} alt="jkhhk"></a>
					</li>
					<li>
						<a href="http://www.schwarzkopf-professional.com"><img src={{ asset( 'images/footer/footer-03.png') }} alt="Schwarzkopf Osis"></a>
					</li>
					<li>
						<a href="http://www.kebelo.com"><img src={{ asset( 'images/footer/footer-04.png') }} alt="Kebelo"></a>
					</li>
					<li>
						<a href="http://www.tigihaircare.com/consumer/en-UK/bedhead"><img src={{ asset( 'images/footer/footer-05.png') }} alt="Tigi Bedhead - The Hairdressers Choice"></a>
					</li>
					<li>
						<a href="http://www.catwalkbytigi.com"><img src={{ asset( 'images/footer/footer-06.png') }} alt="Tigi Catwalk - hair styling from the runways"></a>
					</li>
					<li>
						<a href="http://www.tigihaircare.com"><img src={{ asset( 'images/footer/footer-07.png') }} alt="Tigi B for Men"></a>
					</li>

					<li>
						<a href="http://www.ghdhair.com"><img src={{ asset( 'images/footer/footer-08.png') }} alt="One"></a>
					</li>

				</ul>
			</section>

			<section id="aboutus" class="group">
				<ul class="tinytext">
					<li><strong>Jakata Salon</strong></li>
					<li>Hairdressers in Warrington</li>
					<li>Hairdressers in Cheshire</li>
					<li>Cutting</li>
					<li>Colouring</li>
					<li>Opti-Smooth Straightening</li>
					<li>Hair Extensions</li>
					<li>Wedding Hair</li>
					<li>Hairdressing Gift Vouchers</li>
					<li>GHD</li>
					<li>Daniel Anderson Hairdressing</li>
					<li>Warrington Hairdressers</li>
					<li>Warrington Hairdressing</li>
					<li>Cheshire Hairdressers</li>
					<li>plus lots more!</li>
					<li>All in our Warrington Hairdressing Salon</li>
				</ul>
			</section>

		</footer>
		<div id="facebook">
			<a href="http://www.facebook.com/JakataSalon"><img src={{ asset( 'images/home/facebook_logo.png') }} alt="Facebook"></a>
		</div>

		<div id="twitter">
			<a href="https://twitter.com/JakataSalon"><img src={{ asset( 'images/home/twitter_logo.png') }} alt="Twitter"></a>
		</div>
	</div>

</body>

</html>