<!DOCTYPE HTML>
<html class="no-js">
	
@section('head')

@show

<body>

<div class="container" id="page">

<header class="group">

	{{-- make it a link --}}
	<div id="logo"></div>

	<h1>Jakata Salon</h1>
	<h2>Fashion Forward Hairdressing</h2>

</header>
	
	<section id="prospect-info">
	
	<section id="prospect-image"></section>
	
	<p><strong>Jakata is a fashion forward, award winning hairdressing salon in Warrington.</strong></p>
	<p>The team of eight skilled stylists display a diverse range of skills.</p>
	<p><em>You'll be blown away by how friendly and approachable each of our team members are, and the warm, welcoming environment Jakata offers.</em></p>
	<p><strong>You know you're in good hands at JAKATA.</strong></p>
	
	<section id="address_info">
	<p>90/92 Bridge Street, Warrington</p>
	<p class="big">01925 242960</p>
	</section> <!--address_info-->
	</section> <!--prospect-info-->

	@yield('content')

	<div class="clear group"></div>
	
</div><!-- page -->

</body>