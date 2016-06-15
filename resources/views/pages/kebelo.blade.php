@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Kebelo Smoothing System at Jakata',
	'keywords' => 'kebelo, straightening, smoothing, frizz free hair',
	'ogtitle' => 'Kebelo - Goodbye frizz, hello smooth',
	'ogdescription' => 'With Kebelo ADVANTAGE smoothing system you will get 100 days of frizz-free, easy to manage, healthy, shiny, smooth hair. We know how bad hair days can be stressful. We know years of styling and colouring can leave hair damaged and prone to frizzing. We know how much time and effort it takes to keep it looking beautiful. Those days are now over. With this revolutionary smoothing treatment you will get amazingly smooth, frizz-free, glossy, easy to manage hair. If you are one of the 86% that suffers from either dry, damaged, frizzy or unruly hair, then ADVANTAGE is the solution.',
	'ogimage' => url('/') . '/images/fbmeta/kebelo.jpg',
	'title' => 'Jakata Salon - Kebelo Smoothing System - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="kebeloMain">

	<div id="advantage">
	
	<div id="advantage_copy">
	<h3>Frizz-Free living<br>for 100 days</h3>
	<p>Goodbye frizz, hello smooth. With Kebelo ADVANTAGE smoothing system you will get 100 days of frizz-free, easy to manage, healthy, shiny, smooth hair.</p>
	<p>We know how bad hair days can be stressful. We know years of styling and colouring can leave hair damaged and prone to frizzing. And we know how much time and effort it takes to keep it looking beautiful. Those days are now over. With this revolutionary smoothing treatment you will get amazingly smooth, frizz-free, glossy, easy to manage hair. If you are one of the 86% that suffers from either dry, damaged, frizzy or unruly hair, then ADVANTAGE is the solution.</p>
	<p>The Kebelo ADVANTAGE smoothing treatment takes three simple steps; cleanse, treat and maintain. Using Kebelo pioneered carbocysteine hair technology that allow the treatment to support, strengthen and revitalise each strand from within, weak, dull, frizzy, unhealthy hair is transformed to beautiful smooth locks filled with bounce and volume.</p>
	<p><strong>It only takes 1 hour to achieve perfect hair that lasts for 100 days, and you can have your hair coloured straight after. This unique foundation treatment lets you lose the frizz whilst maintaining the bounce and volume, giving you even more styling freedom and an unbelievably healthy shine.</strong></p>
	<!--<p><strong>For a limited time have a Kebelo Advantage Treatment and get a FREE Cut, Dry &amp; Style for just &pound;99</strong></p>-->
	</div> <!--end advantage copy-->
	<div id="three_advantages">
	<h3>3 advantages of ADVANTAGE</h3>
	<p>Kebelo Spent 18 months creating the first ever long term smoothing system and, in the process, gained a reputation for innovation, safety and creativity. Now they have pioneered a new treatment which has three distinctive benefits not found anywhere else.</p>
	<ol>
	<li><strong>TIME:</strong> It only takes one hour to complete. Thanks to the new dispersion technology, the entire application process is quicker and more enjoyable.</li>
	<li><strong>COLOUR:</strong> We can apply colour directly after your Kebelo System Treatment. As it gets to work laying a foundation deep inside the hair, it gives your new colour a vibrancy like never before.</li>
	<li><strong>AFFORDABLE:</strong> You will get shiny, frizz free, easy-to-manage hair from just &pound;99, and that includes over &pound;25 worth of after-care. It amounts to just &pound;1 a day to keep the frizz away!</li>
	</ol>
	</div> <!--end 3advantages-->
	</div> <!--end advantage-->
</div> <!--end kebeloMain-->


@stop