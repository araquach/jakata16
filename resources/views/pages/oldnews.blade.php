@extends('layouts.main')

@section('head')
	<meta name="description" content="For previous JAKATA hair news">
	<meta name="keywords" content="Hair news, hairdressing news">
@stop

@section('title')

	<title>Jakata Salon - News Archive</title>

@stop

@section('content')

<script type="text/javascript">
window.addEvent('domready', function(){
	  new Fx.Accordion($('accordion'), '#accordion .reveal', '#accordion .hidden');
	   });
</script>

<section id="news">

<section id="accordion">
	
<article class="article">
<a id="newBC" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/bonacure.jpg', 'Bonacure') }}
<h2>New BC Bonacure launch</h2>
<p><strong>Tailor Made Care for Ultimate Hair Perfection</strong></p>
<p>Schwarzkopf have always had a big part to play in the salon. Every colour service we do uses Schwarzkopf's amazing colour range and we've always used their hair care range. In recent years Tigi's products have become more widely used in the salon as the brand really connected with the team and clients alike - making Schwarzkopf's products seem a little dull and dated.</p>
<p>So we were all really excited to hear that the Schwarzkopf range was getting a much needed relaunch with the packaging getting a facelift and the products getting a complete  overhaul - introducing some amazing new technology.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/new_bc.jpg', 'New BC') }}
<p>The new range has now arrived in the salon and I've got to say that so far we're all really impressed. The packaging looks a lot fresher and modern (would look great in any bathroom) and after using a variety of the products on our clients the results have been great. The newly formulated products definitely have the edge and the range is now a lot more comprehensive.</p>
<p>Schwarzkopf claim the products outperform the market leaders and that they bring your hair closer than ever to natural perfection! If your looking for flawless smoothness, superior colour shine, ultimate body, excellent hydration, stunning rejuvenation, outstanding activation or unmatched replenishment then these could be the products for you!</p>
<p><strong>Here's an overview of the products:</strong></p>

<h4>BC REPAIR RESCUE<br>for Damaged &amp; Distressed Hair</h4>
{{ Html::image('images/newspics/repair-rescue.jpg', 'Repair Rescue') }}
<ul>
	<li><strong>Repair Rescue Shampoo</strong><br>
	A caring shampoo for normal to fine damaged hair.</li>
	<li><strong>Repair Rescue Deep Nourishing Shampoo</strong><br>
	An intensively caring shampoo for extremely damaged normal to thick hair.</li>
	<li><strong>Repair Rescue Spray Conditioner</strong><br>
	A leave-in conditioner with instant repairing action for damaged hair.</li>
	<li><strong>Repair Rescue Conditioner</strong><br>
	Intensive creamy conditioner for damaged hair.</li>
	<li><strong>Repair Rescue Treatment</strong><br>
	Reconstructing treatment for normal to fine damaged hair.</li>
	<li><strong>Repair Rescue Deep Nourishing Treatment</strong><br>
	The most intensive BC treatment for extremely damaged normal to thick hair.</li>
	<li><strong>Repair Rescue Sealed Ends</strong><br>
	An intensive cream-serum for hair ends that seals and prevents splitting.</li>
</ul>

<h4>BC COLOR FREEZE<br>
For coloured and highlighted hair</h4>
{{ Html::image('images/newspics/colour-freeze.jpg', 'Color Freeze') }}
<ul>
	<li><strong>Color Freeze Gloss Serum</strong><br>
	A crystal clear and lightweight shine serum for colour treated hair.</li>
	<li><strong>Color Freeze Sulfate-Free Shampoo</strong><br>
	Gentle shampoo for colour treated hair, ideal for use in post-colour service.</li>
	<li><strong>Color Freeze Rich Shampoo</strong><br>
	A highly caring shampoo for over-processed and dull colour treated hair.
	</li>
	<li><strong>Color Freeze Silver Shampoo</strong><br>
	Pigmented shampoo for cool colour tones.</li>
	<li><strong>Color Freeze Spray Conditioner</strong><br>
	A lightweight conditioning spray for colour treated hair.
	</li>
	<li><strong>Color Freeze Conditioner</strong><br>
	A rich creamy conditioner for colour treated hair.</li>
	<li><strong>Color Freeze Treatment</strong><br>
	An intensely restoring, creamy treatment for colour treated hair.</li>
	<li><strong>Color Freeze Thermo-Protect Cream</strong><br>
	A weightless leave-in treatment with heat protection.</li>
</ul>

<h4>BC MOISTURE KICK<br>
For normal to dry, wavy or curly hair that’s coarse or brittle, lacking elasticity and bounce.</h4>
{{ Html::image('images/newspics/moisture-kick.jpg', 'Moisture Kick') }}
<ul>
	<li><strong>Moisture Kick Beauty Balm</strong><br>
	A moisturising care &amp; styling balm with added heat protection.</li>
	<li><strong>Moisture Kick Shampoo</strong><br>
	A moisturizing shampoo for normal to dry, brittle or curly hair.</li>
	<li><strong>Moisture Kick Spray Conditioner</strong><br>
	An instantly hydrating, lightweight spray conditioner for normal to dry, brittle or curly hair.</li>
	<li><strong>Moisture Kick Treatment</strong><br>
	Deeply hydrating treatment for normal to dry, brittle or curly hair.</li>
	<li><strong>Moisture Kick Defining Cream</strong><br>
	A rich hydrating cream to define curly or coarse hair.</li>
</ul>

<h4>BC TIME RESTORE<br>
For mature hair that has lost strength or moisture leaving it weak, dry or brittle</h4>
{{ Html::image('images/newspics/time-restore.jpg', 'Time Restore') }}
<ul>
	<li><strong>Time Restore Rejuvenating Serum</strong><br>
	Ultimate all-in-one scalp and hair serum for protection, care and elasticity.</li>
	<li><strong>Time Restore Shampoo</strong><br>
	A gently cleansing shampoo for mature hair.</li>
	<li><strong>Time Restore Conditioner</strong><br>
	A rich conditioner for dry and brittle mature hair.</li>
	<li><strong>Time Restore Treatment</strong><br>
	A strengthening treatment for mature hair.</li>
	<li><strong>Time Restore Rejuvenating Spray</strong><br>
	A lightweight 2-phase detangler and volumiser in one.</li>
</ul>

<h4>BC VOLUME BOOST<br>
For fine to normal hair, lacking body, volume and vitality</h4>
{{ Html::image('images/newspics/volume.jpg', 'Volume') }}
<ul>
	<li><strong>Volume Boost Shampoo</strong><br>
	A purifying shampoo for fine and weak hair.</li>
	<li><strong>Volume Boost Perfect Foam</strong><br>
	Detangling mousse that increases body.</li>
	<li><strong>Volume Boost Refresher</strong><br>
	A refreshing spray to boost body of fine and weak hair.</li>
</ul>

<h4>BC SMOOTH SHINE<br>
For thick, coarse, wavy, curly, unmanageable and frizzy hair</h4>
{{ Html::image('images/newspics/smooth.jpg', 'Smooth') }}
<ul>
	<li><strong>Smooth Perfect Smoothing Cream</strong><br>
	Smoothing cream with heat protection.</li>
	<li><strong>Smooth Perfect Shampoo</strong><br>
	Taming shampoo for unruly, coarse hair.</li>
	<li><strong>Smooth Perfect Conditioner</strong><br>
	An effective taming conditioner for unruly, coarse hair.</li>
	<li><strong>Smooth Perfect Treatment</strong><br>
	Intensive taming and nourishing treatment for unruly to coarse hair.</li>
</ul>
<p class="offerHeading"><strong><em>The full range is available in the salon now!</em></strong></p>
<p class="offer"><em>Pick up some free samples to try the products out for yourself (while stocks last)</em></p>
<p><a href="http://www.schwarzkopf-professional.co.uk/skp/uk/en/home/products/care/bc-bonacure/philosophy.Html" target="_blank">Visit the Schwarzkopf Professional site for more information</a></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2014-03-26">26<sup>th</sup> March 2014</time>
</article> <!--end #article-->
	
<article class="article">
<a id="optiSmooth" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/opti-smooth.jpg', 'Opti-Smooth') }}
<h2>Smooth, Frizz free hair is yours</h2>
<p><strong>Opti-Smooth is one of our in salon professional permanent hair chemical straighteners. It is a technologically advanced straitening system which leaves hair with remarkable shine and silkiness until it eventually grows out. This treatment is perfect for frizzy unruly, hard-to-manage hair making life a lot easier! 
</strong></p>
<p>We have had amazing feedback from the Opti-Smooth treatment, some clients saying it reduces the styling time of their hair by 50%. Ideal for keeping it smooth in this damp, wet weather or simply find it a struggle to tame your hair! </p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/opti-smooth2.jpg', 'Opti-Smooth') }}
<p>All clients that are considering the Opti-Smooth treatment must come in for a free consultation beforehand so one of our stylists can carry out a strand test to ensure the hair condition is ok to work with. This is also a great opportunity if you have any questions to ask your stylist about the treatment.</p>
<p>In your consultation we can also give you an accurate price on this service as different hair lengths will  be slightly different in price. The time that it takes will also vary depending on the length and thickness of your hair.</p>
<p>When your Opti-Smooth starts to grow out you can come in and have a root application to keep on top of your sleek straight style.</p>
<p>Prices for this full service vary from £220 to £240 depending on the level of stylist you have.</p>
<p>Prices for a root application vary from £200 to £220</p>
<p><strong>If you have never had an Opti-Smooth treatment before you will receive 25% off! (until 31/01/14)</strong></p>
</section> <!--end .hidden-->
<p class="author">Published by Maisie</p>
<time datetime="2013-11-22">22<sup>nd</sup> November 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="KebeloWinners" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/kebelo2.jpg', 'Kebelo Smoothing System') }}
<h2>Kebelo Competition Winner</h2>
<p><strong>Last month we gave you the opportunity to win one of three Kebelo smoothing treatments. (if you don't know what Kebelo is click here)</strong></p>
<p>Find out if you've won below&hellip;</p>
<p class="reveal">The Winners &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<ul>
	<li><strong>Hilary  Bromley</strong></li>
	<li><strong>Millicent Jones</strong></li>
	<li><strong>Raquel Greveson</strong></li>
</ul>
<p class="offer_heading">Congratulations! You will have the smoothest, shiniest hair in the area!</p>
<p class="offer">We will contact you soon to arrange for you to come in and have this amazing treatment.</p>
<p class="offer">A brand new competition will be launched soon!</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-10-11">11<sup>th</sup> September 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="VikkiInterview" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/vikki.jpg', 'Vikki Rowland') }}
<h2>Get to know the team: Meet Vikki</h2>
<p>This month we our team member focus is on Jakata team leader Vikki Rowland.</p>
<p>As ever, we threw a ton of questions at her to try and find out what makes her tick!.</p>
<p>Click below to read the full interview &hellip; </p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<dl>
	<dt>How long have you been hairdressing for Vikki?</dt>
	<dd>I have been hairdressing for 14 years now.</dd>
	
	<dt>When did you join the Jakata team?</dt>
	<dd>I joined Jakata in November 2011. I previously worked at HCUK (formally Haircuttery) for 8 years before joining the Jakata team.</dd>
	
	<dt>When did you first realise you wanted to become a hairdresser and where did you start?</dt>
	<dd>I think I always wanted to be a hairdresser, which I know sounds like a cliché. When I was little I used to style my Barbie dolls hair as I didn’t have a girls world. I even gave one a crue cut! My mum still has it in the attic.</dd>
	
	<dt>If you had chosen another profession what would it have been?</dt>
	<dd>I did want to be a climatologist/meteorologist (storm chaser), I have always been fascinated by the weather since I was little, I used to be able to look at the sky and tell you the name of every cloud up there and its purpose.</dd>
	
	<dt>What key points make Jakata good at developing new stylists?</dt>
	<dd>I think Jakata has a nurturing environment that you can learn from every stylist that works here as everyone’s skills are so varied. This makes every member just as valuable as the last.</dd>
	
	<dt>What's your favourite hairstyle of all time and why?</dt>
	<dd>I would say its hairstyle's plural as opposed to a single style.  The classic styles of the 1940/50s are among the most elegant and intricate styles I’ve seen, specifically focusing on the way people of the time pin curled their hair to achieve some of those styles. I believe that pin curling can be adapted to almost any hair type and can be worked to fit any style no matter what the era.</dd>
	
	<dt>If you could cut anyone's hair who would it be and why?</dt>
	<dd>It would have to be Tom Hardy, I admire him as an incredible method actor and it would be an absolute honour to meet him.
	If I could go back in time it would have to be Bettie Page. To be the person to cut that fringe! Her hairstyle and modelling style is what has made her an icon of a new generation, who’s reputation will still live long after her passing.
	</dd>
	
	<dt>How do you go about creating your cutting/colour styles? Is it difficult to think up new ideas and keep up with the latest trends?</dt>
	<dd>I am always looking at fashion magazines, on line at catwalks and fashion weeks for new seasons trends. I like to look into photographers and models for current styles. I also like to keep in touch with modern art for inspiration with new colour and cut ideas, I think it is important to keep up to date on the latest up and coming trends.</dd>
	
	<dt>Whats the secret to a good haircut/style?</dt>
	<dd>The secret is to make sure you adapt the haircut to your client, whatever style they want, pay attention to their hair type whether it be thick or fine hair and to  take their face shape into account, is it round, oval or heart shape etc, and equally as important their lifestyle - do they spend a lot of time on their hair or are they looking for a low maintenance look. All these factors are really important to the end result.</dd>
		
	<dt>What tips can you give to up and coming hairstylists?</dt>
	<dd>For hairstylists just starting out I'd say never stop watching and learning from your more senior colleague or even newly qualified ones for that matter. This also applies to experienced stylists - you should never stop learning, the industry changes on a daily basis, therefore you need to always be on your toes.</dd>
	
	<dt>Can you describe a particular makeover that gave you the most satisfaction?</dt>
	<dd>I had a client once that had very low self-esteem, she didn’t know what to do with her hair. I advised her on what colour and cut would suit her best, she had a very busy life style and needed something low maintenance. As her cut was already short we went for a pixie crop and coloured it a rich red shade to compliment the natural red tone in her hair. During the time she was in the salon I mentioned in passing that I liked to dabble in making my own garments. With her being a seamstress she found this interesting and proceeded to have an in-depth conversation about vintage fashion which was an interest to the both of us. After the service was finished she stated how much she had enjoyed her time with me and that I'd see her again.
	The next time I saw her she came back with a sewing machine as a gift. It was a thank you for giving her her confidence back. It felt fantastic to make someone feel that good about themselves, that’s what it’s all about at the end of the day.
	</dd>
	
	<dt>What do you think sets Jakata apart from other salons?</dt>
	<dd>I believe Jakata is a family - we all work well together as a team, we strive to keep that homely welcoming environment within the salon. It's also very nurturing - when you want to achieve something they will push you to make it happen with all the support you could ask for.</dd>
	
	<dt>Whats the best thing for you about being a stylist at Jakata?</dt>
	<dd>Just to be a part of a wonderful team who believe that the client’s needs come first above all else.
	It may sound corny but I do believe Jakata is more than a ‘team’ it’s a family.</dd>
	
	<dt>What do you think is the most exciting new autumn/winter 2013 hair trend?</dt>
	<dd>The trend I’m most interested in at the moment is film noir but with a modern twist encapsulating a cinematic appearance, I like the fact that there is a blend of eras coming together melding the 1940’s and 1970’s to achieve a wearable but fashion forward look.</dd>
	
	
	<dt>What thought process do you go through when styling someone for a photo shoot?</dt>
	<dd>The planning process starts months before the photo shoot date,
	At first we discuss and set a theme for the shoot for e.g. summer trends.
	We then set about designing the complete look, I usually preferred to set a style to the model I am doing to compliment them and make the shoot work better overall, once I have a look I then practise, practise, practise until the photo shoot day.</dd>
		
	<dt>Out of the product ranges which is your favourite and why?</dt>
	<dd>out of all the ones we stock I have to say Tigi Bed Head is my favourite, I think there is level of versatility with Bed Haad as you can cocktail most of the products to achieve a look that works for everyone. They appeal to a wide variety of people of any age or hair type.</dd>
	
	<dt>Is there a certain time period or style icon you look to for inspiration?</dt>
	<dd>I am a very big fan of vintage styling as a whole, anything ranging from 1920’s-60’s, I think there is something about those eras that to me is aesthetically pleasing and are still used as inspiration for many people so many years later. I personally like to style myself towards the 1940’s-early 1950’s. I look to the likes of Rita Hayworth, Grace Kelly, and Lauren Bacall for my own person inspiration.</dd>
	
	<dt>Is there a celebrity that inspires you? Who and why?</dt>
	<dd>I have to say Jamie Oliver for all the work he's done to improve our health and diets, he's gone on to make vital changes in government and has gone to inspire other celebrity chefs to do the same. He uses his celebrity status positively to try to make a difference.</dd>
	
	<dt>Do you have a signature hairstyle? If so, describe it.</dt>
	<dd>I do have to say I enjoy doing hair up, especially vintage hair up. If I had a signature hairstyle it would probably be when I do a hair up I always create a swirl detail within the style, be it big or small, just to give the hair style a bit of character.</dd>
	
	<dt>What pushes your buttons in the world of fashion hair and beauty?</dt>
	<dd>I love to look at what’s new in fashion and hair on the catwalks. When fashion week starts there’s always something interesting to see. For beauty I do enjoy watching U Tube for on trend make up looks and how to recreate them.</dd>
	
	<dt>Tell me your strengths and weaknesses as a hairdresser.</dt>
	<dd>I’d like to think my strengths are with hair up and vintage styling i.e. pin curl setting, victory rolls etc.
	Although I do enjoy every aspect of hairdressing.<br>My weakness is that I talk too much! It’s a definite weakness because I get so engrossed into a conversation that I forget where I am. </dd>
</dl>

<p class="offer">Many thank's to Vikki for taking the time out to answer our questions.</p>
<p class="offer">If you'd like to book an appointment with Vikki, just call 01925 242960</p>
<p class="offer">{{ Html::link('team', "Find out more about the Jakata team members here") }}</p>

</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-08-29">29<sup>th</sup> August 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="ConditioningTreatments" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/glam_chic.jpg', 'Glam Chic') }}
<h2>Treat Your Hair this summer</h2>
<p>We all know your hair needs some extra TLC from time to time, excessive use of heat styling tools plus over colouring leads to tired, hard to style hair.</p>
<p>To get the most from your locks we recommend an in-salon intensive treatment every month or two. the &pound;5 - &pound;10 cost is well worth the results - no more bad hair days for at least a month!</p>
<p>Here at Jakata we have a diverse range of treatments suited to every hair type with the aim to solve a whole host of hair issues.
Jakata senior stylist <strong>Maisie Thompson</strong> has compiled information on all the treatments we have to offer.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<h3>Tigi Hair Reborn</h3>
<p>Hair Reborn is a new product range offering 3 different 'journeys' all aiming to address a specific hair problem.</p>
<h4>Journey of Resurgence for Dry Hair:<br>Treatment of Moisture Balance</h4>
{{ Html::image('images/newspics/tigi_resurgence.jpg', 'Resurgence') }}
<p>I tried this treatment out on my colleague Mikala, the shine on her hair after the application was amazing. We recommend you to have these treatments every 6-8 weeks in salon to keep your hair in the best condition with luminous shine. The treatment gives your hair an astonishing 400% more hydration.</p>
<p><strong>Price: &pound;7.50<br>Time Taken: 10-20 minutes</strong></p>
<h4>Journey of Awakening for weak, damaged hair:<br>
	Treatment of Restoration</h4>
{{ Html::image('images/newspics/tigi_awakening.jpg', 'Awakening') }}
<p>This again is an in-salon treatment designed for weak damaged hair, particularly those who find they have a lot of breakage/split ends. It is perfect to have done in-salon after a colour to keep your hair feeling as healthy as possible with strength and vitality.</p>
<p><strong>Price: &pound;7.50<br>Time Taken: 10-20 minutes</strong></p>
<h4>Journey of serenity for frizz prone hair:<br>
	Treatment of Smoothing</h4>
{{ Html::image('images/newspics/tigi_serenity.jpg', 'Serenity') }}
<p>For all of you that suffer with naturally frizzy hair, this treatment is perfect for you. It also works wonders for hair that’s curly with a natural frizz, helping define curls. It works by sealing the hairs fibres and nourishing the hair to give it exceptionally smooth and shiny results. This treatment gives your hair up to 80% reduction in frizz.  Perfect for this damp British weather.</p>
<p><strong>Price: &pound;7.50<br>Time Taken: 10-20 minutes</strong></p>

<p><strong>Experience one of our luxury hair re-born treatments in salon with a complimentary relaxing head and shoulder massage. We also have a take-home treatment for you to  use in between your in-salon treatment. There is one in each range, so its personalised for your individual hair.</strong></p>

<h3>Schwarzkopf One Shot Treatments</h3>
<h4>Repair Rescue</h4>
{{ Html::image('images/newspics/repair_one_shot.jpg', 'Repair One Shot') }}
<p>Perfect for broken down damaged weakened hair. Great for people that want a quick fix with not much time to spare. Once the treatment has been applied it instantaneously closes the hair cuticle effectively strengthening the inner hair fibre. </p>
<p><em>It gives immediate visible results leaving the hair shiny, luminous and healthy. Because it works so fast the treatment is only left on for a minute. Great for people in a rush that want to keep their hair in the healthiest way possible.</em></p>
<p><strong>Price: &pound;5<br>Time Taken: 1 minute</strong></p>

<h4>Smooth and Shine</h4>
{{ Html::image('images/newspics/smooth_one_shot.jpg', 'Smoothe One Shot') }}
<p>In-salon treatment again perfect for those that don’t have much time to spare. This treatment gives the hair instant care by closing the cuticle and helping to deliver control and definition. </p>
<p><em>This treatment gives a high gloss finish leaving the hair with illuminating radiance, for just £5 why neglect your hair!</em></p>
<p><strong>Price: &pound;5<br>Time Taken: 1 minute</strong></p>

<p><strong>The one shot treatments are a quick but very effective way of keeping your hair in the best condition it possibly can be in.</strong></p>

<h3>Schwarzkopf Fibre Force</h3>
{{ Html::image('images/newspics/fibre_force4.jpg', 'Fibre Force') }}
<p>Fibre force gives you the chance to get your hair back to virgin quality in 4-10 weeks. This treatment takes between 10-15 minutes costing just £5. It deeply replenishes and rejuvenates the hair, it immediately feels fuller stronger and revitalized. </p>
<p><em>Vickie who works with us has been using the fibre force for 7 weeks, she has noticed a dramatic difference and is extremely impressed with the product.</em></p>
<p><strong>Price: &pound;5<br>Time Taken: 10 -15 minutes</strong></p>

<p><em>There is an intensive conditioning treatment suited for all hair types, your Jakata stylist will recommend the best one for your needs</em></p>

<h3>Special Offer</h3>
<p class="offer">We're running a fantastic offer on treatments this month</p>
<p class="big">{{ Html::link('specialoffer', "Click here for the offer details") }}</p>

</section> <!--end .hidden-->
<p class="author">Published by Maisie</p>
<time datetime="2013-05-07">7<sup>th</sup> May 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="MenTrends" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/men1.jpg', 'Men Trends') }}
<h2>Men's Summer Trends</h2>
<p>Here at Jakata we have a large male clientele with most stylist's being as proficient at men's hair as women's.</p>
<p>There have been some really strong men's looks leaving the salon recently so I asked Jakata stylist <strong>Mikala Sutcliffe</strong> to give us the lowdown on up and coming men's styles&hellip;</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/men2.jpg', 'Men Trends 2') }}
<p>The big style trend for men’s hair for spring and summer 2013 is all about the exaggerated sleek side parting with quiff, taking the sides and back super short with a disconnection from from the top.</p>
<p>It's a bold and versatile look, can be slick and smooth, (using Catwalk Session Series Wet Look Gel) or a messed up loose texture (try Catwalk Session Series Sea Salt Spray), or for the most daring have the top section permed for the ultimate curly texture.</p>
{{ Html::image('images/newspics/men3.jpg', 'Men Trends 3') }}
<p>My Buzzwords for the season:</p>
<table>
<tr>
<td>Quiffed</td>
<td>Gelled</td>
<td>Side Parting</td>
</tr>
<tr>
<td>Groomed</td>
<td>Smart</td>
<td>Clean Edges</td>
</tr>
<tr>
<td>Exagerated</td>
<td>Sleek</td>
<td>Wave</td>
</tr>
<tr>
<td>Wet Look</td>
<td>Disconnected</td>
<td>Perm</td>
</tr>
</table>
<p class="offer">Men's cut's range from  &pound;14 to &pound;34 (depending on level of stylist)</p>
</section> <!--end .hidden-->
<p class="author">Published by Mikala</p>
<time datetime="2013-05-02">2<sup>nd</sup> May 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="CollectionNews" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/artistic_team.jpg', 'Jakata Artistic Team') }}
<h2>Artistic team produce new collection</h2>
<p>Over the last few months the Jakata artistic team have been working extremely hard coming up with and developing ideas for their latest collection.</p>
<p>The brief was to produce a collection of images that reflect the fashion forward, cutting edge style that Jakata represents. The images will be used for salon branding and maybe be entered into competitions.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/shoot.jpg', 'Photoshoot') }}
<p>Jimmy said 'People don't realise the amount of work that goes into planning a shoot, even before you've seen the models or picked up a camera. We pull all our ideas together through mood boards then spend weeks practicing our looks.'</p>
<p>Earlier this month the photo shoot took place, and thanks to the prep work we put in, the looks came out great.</p>
<p class="offer">Keep an eye out for our latest collection images, we'll be posting them in the next few months&hellip;</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-04-25">25<sup>th</sup> April 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="HairReborn" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/tigi_reborn.jpg', 'Tigi Hair Reborn') }}
<h2>Introducing Tigi Hair Reborn</h2>
<p>Hair Reborn is a new hair product range by Tigi that uses concentrated raw ingredients to replace proteins and restore your hair to a more youthful state.</p>
<p>Designed by TIGI hairdressers, the collection of shampoos, conditioners, hairsprays and styling treatments have been created to restore hair to its natural state, using 'Hyper Distillation' technology to ensure the highest and most potent pharmaceutical grade products.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/tigi_resurgence.jpg', 'Resurgence') }}
{{ Html::image('images/newspics/tigi_serenity.jpg', 'Serenity') }}
{{ Html::image('images/newspics/tigi_awakening.jpg', 'Awakening') }}
<p>There are three journeys to choose from, each catering to specific needs:</p>
<ul>
	<li>Resurgence for Dry Hair</li>
	<li>Serenity for Frizz-Prone Hair</li>
	<li>Awakening for Weak, Damaged Hair</li>
</ul>
<p>Each range has a shampoo, a conditioner, and a take home treatment. Plus an intensive in-salon treatment is also available.</p>
<p>The range is only available in a selected salons, and Jakata is one of the few. Since it's arrival it is proving to be a massive hit with the Jakata team and clients alike.</p>
<p><iframe width="90%" height="auto" class="right" src="http://www.youtube.com/embed/PyvXRsXgCVg" allowfullscreen></iframe></p>
<p>It's a premium haircare range with prices starting at £17.95 for the Shampoos and take-home treatments around the £28 mark. If your hair needs a big pick-me-up then we'd highly recommend the in-salon treatment from just £7.50.</p>
<p class="offer">The quality of these products goes beyond what we've ever seen before, the positive feedback from early adopters has been amazing. If you wan't to give them a try we've got some free sample packs in the salon (only until stocks last!). Drop in to get yours!</p>
</section> <!--end .hidden-->
<p class="author">Published by Jakata</p>
<time datetime="2013-04-25">25<sup>th</sup> April 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="MaisieInterview" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/maisie.jpg', 'Maisie Thompson') }}
<h2>Get to know the team: Meet Maisie</h2>
<p>This month we caught up with Jakata's newest stylist Maisie Thompson who joined us last October.</p>
<p>We bombarded her with loads of questions about her role as a Jakata stylist.</p>
<p>Click below to read the full interview &hellip; </p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<dl>
	<dt>How long have you been hairdressing for Maisie?</dt>
	<dd>I've been hairdressing for 8 years now.</dd>
	
	<dt>When did you join the Jakata team?</dt>
	<dd>I'm the newest member of the team. I only joined in October 2012.</dd>
	
	<dt>When did you first realise you wanted to become a hairdresser and where did you start?</dt>
	<dd>From a very young age I used to use tin foil to foil my girls world's hair with paint and practice plaits on all my 3 sisters. My first hairdressing job was at MC2 hair design in Stockton Heath.</dd>
	
	<dt>If you had chosen another profession what would it have been?</dt>
	<dd>I think I would've been a nail technician.</dd>
	
	<dt>What key points make Jakata good at developing new stylists?</dt>
	<dd>The very friendly relaxed environment allows us to home in on our talents and then expand them and encourage them to pass on to other members of staff.</dd>
	
	<dt>What's your favourite hairstyle of all time and why?</dt>
	<dd>I just love anything with bounce and attitude!</dd>
	
	<dt>If you could cut anyone's hair who would it be and why?</dt>
	<dd>Michelle Keegan - because her hairs too long and its not fair. Haha</dd>
	
	<dt>How do you go about creating your cutting/colour styles? Is it difficult to think up new ideas and keep up with the latest trends?</dt>
	<dd>Always listen to the client then take what they have said into consideration and advise them on what your thinking or use their ideas and incorporate some of your own. I think its very important that you always listen properly to your client so you know exactly what they like and don’t like before you share your ideas with them. Reading a lot of the hairdressing magazines and keeping up with the trends help, then putting your own little twist on them. Also going on courses to give you inspiration helps.</dd>
	
	<dt>Whats the secret to a good haircut/style?</dt>
	<dd>Precision, creativity and a strong understanding of the clients hair.</dd>
	
	<dt>What's the worst mistake you've made while cutting/colouring someone's hair?</dt>
	<dd>The worst thing that happened was when a used a toner which grabbed on the ends of porous hair. I used my colour correction knowledge and deep cleaned it - it came straight out, but I was a little worried for a minute!</dd>
	
	<dt>What tips can you give to up and coming hairstylists?</dt>
	<dd>Make sure you're really passionate about being a hairdresser and have patience. Keep up to date with all the trends and don’t shy away from getting stuck in there or you will never learn. Its the best way to build up your confidence.</dd>
	
	<dt>Can you describe a particular makeover that gave you the most satisfaction?</dt>
	<dd>I had a client that came in that had been travelling for 12 months. She hadn’t been having her hair cut or coloured or looking after it properly. It was seriously matted and had been abused by the salt water and sun. The ends had snapped so her hair was different lengths. I cut it into a bob, put a treatment on and sorted her colour out. She went away looking like a different person (for the better).</dd>
	
	<dt>What do you think sets Jakata apart from other salons?</dt>
	<dd>Its an award winning salon with a fresh young vibe. The atmosphere is very friendly and welcoming.</dd>
	
	<dt>Whats the best thing for you about being a stylist at Jakata?</dt>
	<dd>I feel like I can be more creative and adventurous because the salon has that kind of vibe. I also feel proud to be a part of an award winning salon. They encourage your passion by letting you take part in competitions and photoshoots.</dd>
	
	<dt>What thought process do you go through when styling someone for a photo shoot?</dt>
	<dd>I try to consider the overall image, making sure everything works and fits into place. Using mood boards helps pull the ideas together.</dd>
		
	<dt>Out of the product ranges which is your favourite and why?</dt>
	<dd>Tigi Bed Head has a great range of products to achieve different finishing looks. I think the look of them fits in really well with the salon too. They all smell amazing, so it feels like a luxury product to use.</dd>
	
	<dt>Do you have a signature hairstyle? If so, describe it.</dt>
	<dd>I like big, messy, tussled hair. Nothing too sleek and perfect, a bit ruffled. A kind of beach effect look.</dd>
	
	<dt>Tell me your strengths and weaknesses as a hairdresser.</dt>
	<dd>I'd say colour correction as a big strength, fixing other hairdressers mistakes! (from other salons not Jakata). I took part in a 12 month course that specialised in colour correction and received my certificate in Paris. I guess I just love colouring in general. I'm not as keen on doing men's hair e.g clipper work. I guess I prefer working with longer hair (there's more to play with!)</dd>
</dl>

<p class="offer">Many thank's to Maisie for taking the time out to answer our questions.</p>
<p class="offer">If you'd like to book an appointment with Maisie, just call 01925 242960</p>
<p class="offer">Next month we'll be meeting another Jakata team member.</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-04-25">25<sup>th</sup> April 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="FibreForce" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/fibre_force3.jpg', 'Fibre Force') }}
<h2>New BC Fibre Force</h2>
<p>We've all been guilty of mistreating our hair from time to time, whether it's through over straightening, over colouring or just using poor quality products. Hair is tough, but you do have to treat it right if you want it to behave itself!</p>
<p>Schwarzkopf realised there are a lot of people out there not giving their hair the love and care it needs, so they introduced BC Fibre Force - a complete range of products designed to return your hair to it's former glory over a short(ish) period of time.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/fibre_force2.jpg', 'Fibre Force') }}
<p>Here's what Schwarzkopf say:</p>
<p><em>BC Fibre Force introduces a new dimension of hair repair returning even most eroded hair to its optimal level of force and resilience.</em></p>
<p><iframe src="http://player.vimeo.com/video/56987102" width="90%" height="auto" class="right" allowFullScreen></iframe></p>
<p><em>For the first time the formulas with Micronized Hair-Identical Keratins penetrate deeply into the hair architecture to re-cement specifically the Cell-Membrane-Complex, the intercellular bonding cement responsible for strong and resilient hair fibre.</em></p>
<p>Which in English means that it's going to make the most damaged hair feel loads healthier!</p>
<p><strong>The complete range is as follows:</strong></p>
{{ Html::image('images/newspics/fibre_force.jpg', 'Fibre Force') }}
<ul>
	<li>BC Fibre Force Shampoo</li>
	<li>BC Fibre Force Spray Conditioner</li>
	<li>BC Fibre Force Rinse Out Conditioner</li>
	<li>BC Fibre Force Fortifier Treatment</li>
	<li>BC Fibre Force Keratin Infusion</li>
</ul>
<p class="offer">We've been putting Fibre Force to the test with Jakata stylist Vicky as the guinea pig. We'll be posting the results soon…</p>
<p>Find out more at the Schwarzkopf site: <br> <a href="http://www.schwarzkopf-professional.co.uk/index.php?id=22120" target="_blank">www.schwarzkopf-professional.co.uk/fibreforce</a></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-04-26">26<sup>th</sup> April 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="NatInterview" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/nat.jpg', 'Natalie Doxey') }}
<h2>Get to know the team: Meet Natalie</h2>
<p>This month we took some time out to ask Natalie Doxey some questions about her career as a stylist at Jakata</p>
<p>We found out how she got into hairdressing, her strengths and weaknesses plus her favourite hairdressing looks for Spring and Summer</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<dl>
	<dt>So Natalie, how long have you been hairdressing for now?</dt>
	<dd>I've been a qualified hairdresser for about 2 years now but I've been doing it for about 5 years altogether.</dd>
	
	<dt>When did you join the Jakata team?</dt>
	<dd>I joined the Jakata team back in October 2008 as Saturday staff and continued to do all my training in house.</dd>
	
	<dt>When did you first realise you wanted to become a hairdresser and where did you start?</dt>
	<dd>I have always found the hair and beauty industry fascinating, so I got myself an apprenticeship with Jakata and never looked back. </dd>
	
	<dt>If you had chosen another profession what would it have been?</dt>
	<dd>If I was to do any other job I would be an events organiser, I love planning and co-ordinating things.</dd>
	
	<dt>What key points make Jakata good at developing new stylists?</dt>
	<dd>Jakata is amazing for developing new stylists as they really focus on your weaknesses and polish every last skill up to a high standard. It was such an amazing environment to learn in and an even better one now being on the shop floor full time.</dd>
	
	<dt>What's your favourite hairstyle of all time and why?</dt>
	<dd>I absolutely love all styles, but for me the most iconic is Frankie Sandford from the Saturdays ... throughout my training that cut was so popular, I must've done 100’s of them and I still love it now!</dd>
	
	<dt>If you could cut anyone's hair who would it be and why?</dt>
	<dd>If i could cut anyones hair it would be Isla Fisher. I love her style, colour and cut.</dd>
	
	<dt>How do you go about creating your cutting/colour styles? Is it difficult to think up new ideas and keep up with the latest trends?</dt>
	<dd>Thinking up new ideas is a lot easier than you think, all it takes is a small bit of inspiration. All the team at Jakata feed each other new ideas all the time. Also <em>YouTube</em> is amazing for style ideas too.</dd>
	
	<dt>Whats the secret to a good haircut/style?</dt>
	<dd>The secret to a good hair cut is a good listener. The best thing I ever learnt in my training was how to listen to a clients needs, the rest is easy.</dd>
	
	<dt>What tips can you give to up and coming hairstylists?</dt>
	<dd>Tips for a up and coming stylist are to become a sponge, take every opportunity to learn, any courses you can get yourself on or any shadowing do it now!! Take advantage picking the brains of hairdressers.</dd>
	
	<dt>What do you think sets Jakata apart from other salons?</dt>
	<dd>Jakata is totally different to any other salon. Our laid back atmosphere makes all clients feel at ease and I love the environment we work in. We have the right balance of professionalism and fun.</dd>
	
	<dt>Whats the best thing for you about being a stylist at Jakata?</dt>
	<dd>The best thing for me about Jakata is the staff! I get on so well with everyone and we are such a close team. The clients that we get vary so it keeps my day interesting too.</dd>
	
	<dt>What do you think is the most exciting new spring/summer 2013 hair trend?</dt>
	<dd>My spring summer trend this year is Isla Fisher meets Fern Cotton for me. Rich amazing tones with a mid length, wavy textured hair cut is perfect this year.</dd>
		
	<dt>Out of the product ranges which is your favourite and why?</dt>
	<dd>My favourite products are the <a href="http://www.catwalkbytigi.com/the-catwalk-collection/styling-collection/session-series-styling-collection" target="_blank">Tigi Catwalk Session Series</a>. There isn’t one I don’t love! They're versatile and very current.</dd>
	
	<dt>Do you have a signature hairstyle? If so, describe it.</dt>
	<dd>I don’t think I really have a signature hair style to be honest, I really enjoy hair up styling though</dd>
	
	<dt>What pushes your buttons in the world of fashion, hair and beauty?</dt>
	<dd>All fashion inspires me. I personally like to find things I HATE and turn them into something I love,
		just by changing it slightly whether its a hair cut or colour.</dd>
	
	<dt>Tell me your strengths and weaknesses as a hairdresser.</dt>
	<dd>I love mens cutting, creative colouring, extensions and hair up, they are all my strengths. My weakness is cutting kids hair!!</dd>
</dl>

<p class="offer">Many thanks to Nat for answering these questions for us so candidly.</p>
<p class="offer">Visit back next month to meet another Jakata team member</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-02-15">15<sup>th</sup> March 2013</time>
</article> <!--end #article-->

</section> <!--end #accordion-->

{{ Html::link('news', "Click here for the latest stories&hellip;", array('class' => 'newslink')) }}

</section> <!--end #news-->

@stop