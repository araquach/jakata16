@extends('layouts.main')

@section('content')

<script type="text/javascript">
window.addEvent('domready', function(){
	  new Fx.Accordion($('accordion'), '#accordion .reveal', '#accordion .hidden')
	  
	  });
</script>

<section id="news">

<section id="accordion">

<article class="article">
<a id="Valentine" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/valentine.jpg', 'Valentine') !!}
<h2>Valentine Competition Winners</h2>
<p>We've had a fantastic response to this month's competition. A lucky winner gets a new set of GHD Gold Series styling irons, plus 3 runners up win a Dry &amp; Style in the salon.</p>
<p>The winners have now been drawn!</p>
<p class="reveal">Winners ></p>
</section> <!--end .visible-->
<section class="hidden">
<h3>The winners are&hellip;</h3>
<h4>Winner of the GHD's</h4>
<p>Rebecca Hopwood</p>
<h4>Runners Up</h4>
<p>Philippa Bailey</p>
<p>Samantha Self</p>
<p>Louise Clarke</p>
<p class="offer">Congratulations to our winners, we'll be contacting you soon.<br>
<em>We'll be launching a brand new competition soon - visit our Facebook page or website to keep up to date</em></p>
</section> <!--end .hidden-->
<p class="author">Published by Jakata</p>
<time datetime="2013-02-14">14<sup>th</sup> February 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="LauraInterview" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/laura.jpg', 'Laura Crumplin') !!}
<h2>Get to know the team: Meet Laura</h2>
<p>Every month we're going to have a question and answer session with each of our team members.</p>
<p>This month we're chatting to our longest serving team member, Laura Hall, about how she got into hairdressing and why she loves being a member of the Jakata Team. </p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<dl>
	<dt>How long have you been hairdressing for?</dt>
	<dd>Ive been hairdressing for 8 years now.</dd>
	
	<dt>When did you join the Jakata team?</dt>
	<dd>I joined back in July 2005.</dd>
	
	<dt>When did you first realise you wanted to become a hairdresser and where did you start?</dt>
	<dd>I always knew I wanted to be a hairdresser probably from the age of about 4! I went to South Trafford college in Altrincham and worked as a junior at Rods in Stockton Heath.</dd>
	
	<dt>If you had chosen another profession what would it have been?</dt>
	<dd>I would like to have been a holiday rep. Other than that I always knew I wanted to be a hairdresser.</dd>
	
	<dt>What key points make Jakata good at developing new stylists?</dt>
	<dd>We are always sent on courses and lots of in house training to continually develop our skills. New starters start in the salon from scratch which soon develops them into doing things the Jakata way.</dd>
	
	<dt>What's your favourite hairstyle of all time and why?</dt>
	<dd>Audrey Hepburn's 'Breakfast at Tiffany's' style because its a classic that will never be out of fashion.</dd>
	
	<dt>If you could cut anyone's hair who would it be and why?</dt>
	<dd>Gerard Butler or Johnny Depp, just because they are beautiful. Emma Watson too, because I would have loved to have been the first to chop her mega hair from Harry Potter into the gorgeous little pixie style she now has.</dd>
	
	<dt>Whats the secret to a good haircut/style?</dt>
	<dd>Theres no real secret as long as you have the right core skills and the client has the right products that you recommended to them. The only reason a client says that they can't get the same result when they do their hair themselves is because they haven't got the right products for the job - also an amazing hairdresser!!</dd>
	
	<dt>What tips can you give to up and coming hairstylists?</dt>
	<dd>Offering amazing customer service is key to being a successful stylist. Plus <strong>never</strong> ask the question "same again?"</dd>
	
	<dt>Can you describe a particular makeover that gave you the most satisfaction?</dt>
	<dd>I get satisfaction from doing most of my clients hair. I love doing Opti-Smooth and extensions because you dramatically change the look of your client, I love doing ombre colour techniques too, they look great and are a really creative technique.</dd>
	
	<dt>What do you think sets Jakata apart from other salons?</dt>
	<dd>The atmosphere, the competition work plus I think our team is strong. Clients know how well we work together, our customer service is excellent. Its hard to pin point one thing but we offer so much more and bend over backwards to accommodate.</dd>
	
	<dt>Whats the best thing for you about being a stylist at Jakata?</dt>
	<dd>The people I work with! I love them all, and love working with them. I love the atmosphere, its laid back but still highly professional. I think we have a great team, we work well together.</dd>
	
	<dt>Out of the product ranges which is your favourite and why?</dt>
	<dd>I love Tigi, especially the 'Candy Fixations' range, because they smell amazing and you can create any hairstyle with them.</dd>
	
	<dt>What's your favourite part of hairdressing?</dt>
	<dd>I love doing hair up, if I could do it all day every day I would! Also extensions, Opti-Smooth and Kebelo.</dd>
</dl>

<p class="offer">Thanks Laura for your answers, we'll be chatting to another team member next month!</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-01-04">4<sup>th</sup> January 2013</time>
</article> <!--end #article-->

<article class="article">
<a name="Winners" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/christmas.jpg', 'Christmas') !!}
<h2>Christmas Competition Winners</h2>
<p>The winners of this months Christmas competition have been drawn. We had over &pound;300 worth of prizes up for grabs and hundreds of people enter!</p>
<p>If you entered find out if you're one of the winners below.</p>
<p class="reveal">Winners ></p>
</section> <!--end .visible-->
<section class="hidden">
<h3>The winners are &hellip;</h3>
<ul>
	<li>Helen Illingworth - a &pound;100 Gift Voucher</li>
	<li>Claire Dolan - a &pound;50 Gift Voucher</li>
	<li>Sarah Syers - a &pound;50 Gift Voucher</li>
	<li>Jayne Andrews - a Tigi or Schwarzkopf gift set</li>
	<li>Erin Hesketh - a Tigi or Schwarzkopf gift set</li>
	<li>Kayleigh	Furfie - a Tigi or Schwarzkopf gift set</li>
	<li>Miroslava	Frisova - a Tigi or Schwarzkopf gift set</li>
	<li>Mel	Barton - a Tigi or Schwarzkopf gift set</li>
</ul>

<p class="offer">Well done to our winners, we'll be contacting you shortly.<br>
Look out for more great competitions this year!</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2012-12-29" pubdate="pubdate"><p>29th December 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="NamedAnchor" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/merry-christmas.jpg', 'Merry Christmas') !!}
<h2>Christmas Bookings</h2>
<p>We're anticipating a seriously busy Christmas period this year, we started taking bookings back in September! The salon is open longer hours throughout December, with Sunday/Monday opening in the two weeks before Christmas.</p>
<p>We highly recommend getting your appointment booked soon to avoid disappointment - some of the weekends are already nearly booked up!</p>
<p class="offer"><strong>Call 01925 242960 to book yours now.</strong></p>
</section> <!--end .visible-->
<p class="author">Published by Jakata</p>
<time datetime="2012-06-30" pubdate="pubdate"><p>30th June 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="SessionSeries" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/group.jpg', 'Session Series') !!}
<h2>Update your products this month</h2>
<h3>With Tigi Catwalk Session Series</h3>
<p>A great way to update your product shelf this Autumn is with the newest range from Tigi Catwalk. This versatile fashion forward range, handpicked from backstage at the catwalk shows, covers everything from frizz control, texture, volume and much more.</p>
<p>The styling range is divided into three groups: For texturising, for working and for holding...</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><strong>Click on any of the products below to get more information..</strong></p>
<img src="images/newspics/texture.jpg" width="100" height="160">
<h3>For Texturizing</h3>
<p><em>For ultimate texture and looks straight from the catwalk. A light weight dry shampoo and Salt Spray form this part of the range</em></p>
<p><a href="http://mobile.tigihaircare.com/SessionSeries/TransformingDryShampoo.aspx" target="_blank">Dry Shampoo</a></p>
<p>This lightweight dry shampoo is invisible even on brunettes.<br>
Its remarkable results make it a personal favourite and a best seller.
Use on either unwashed hair or freshly washed hair to keep it from going too fly away.</p>
<p><a href="http://mobile.tigihaircare.com/SessionSeries/SaltSpray.aspx" target="_blank">Salt Spray</a></p>
<p>Give a light pliable hold to your hair with this texturising spray. <br>
Its carefully designed formula allows you to control frizz and fight humidity, while sea salt adds body and definition to the hair to create the most amazing looks.</p>
<img src="images/newspics/work.jpg" width="100" height="160">
<h3>For Working</h3>
<p><em>Seriously versatile styling products used by professionals. Styling Cream, 'Work It' hairspray and True Wax</em></p>
<p><a href="http://mobile.tigihaircare.com/SessionSeries/StylingCream.aspx" target="_blank">Styling Cream</a></p>
<p>This cream thickens hair and adds shine and body. It contains conditioning agents an adds moisture. <br>
Use in wet hair to thicken and condition, use in dry hair for a smooth look.</p>
<p><a href="http://mobile.tigihaircare.com/SessionSeries/WorkItHairSpray.aspx" target="_blank">Work It Hairspray</a></p>
<p>This fast drying workable hair spray is humidity resistant and fights against frizz.<br>
Adds extra shine to your style<br>
Spray 12” away from head and manipulate your style.</p>
<p><a href="http://mobile.tigihaircare.com/SessionSeries/TrueWax.aspx" target="_blank">True Wax</a></p>
<p>This workable wax allows you to tame frizzy hair and provides a pliable hold while adding sheen. </p>
<img src="images/newspics/hold.jpg" width="100" height="160">
<h3>For Holding</h3>
<p><em>For creative hair styles that stay - Wet Look Gel and Finishing Hairspray</em></p>
<p><a href="http://mobile.tigihaircare.com/SessionSeries/WetLookGel.aspx" target="_blank">Wet Look Gel</a></p>
<p>This non flakey gel provides strong hold for the most up-to-date hair trends.<br>
Use on wet or dry hair to get that perfectly structured style</p>
<p><a href="http://mobile.tigihaircare.com/SessionSeries/FinishingHairspray.aspx" target="_blank">Finishing Hairspray</a></p>
<p>Add the final touch to your style with this long last hair spray <br>
Its fine mist evenly distributes the product through your hair to give extra hold and ultimate shine.</p>
<p class="offer">The entire Catwalk Session Series range is available in Jakata now!</p>
</section> <!--end .hidden-->
<p class="author">Published by Natalie Doxey</p>
<time datetime="2012-09-19" pubdate="pubdate"><p>19th September 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="Tweens" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/tweens.jpg', 'Tweens') !!}
<h2>Bed Head Tweens Available Now</h2>
<p>For a limited time pick up your Urban Antidote Tweens for just &pound;28.35!</p>
<p>Thats 3 times more product than the standard retail sizes for only &pound;5 more! </p>
<p>PLUS pick up your free refillable travel kit available with tween purchases (while stocks last)</p>
<p class="offer">This offer is only available for a short time so don't miss out.</p>
</section> <!--end .visible-->

<p class="author">Published by Jakata</p>
<time datetime="2012-07-13" pubdate="pubdate"><p>13th July 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="Shell" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/shell.jpg', 'Michelle Ash') !!}
<h2>Michelle on her way home</h2>
<p>Jakata senior stylist Michelle Ash is finally out of hospital after being in for almost four months! </p>
<p>It's great news - she still has a long road to recovery but she'll definitely be happy to get home....</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>Shell was admitted to hospital eleven weeks ago after it was discovered she had blood poisoning. It all happened so quickly that it came as a massive shock to the team. Things got so serious with her condition that at one point we were told to prepare for the worst. She fought through but remained in a coma for a few weeks - over a period of time she started to come round and is now making a steady recovery.</p>
<p><em>We're all wishing her the best here at Jakata - our camping trips aren't the same without her!!</em></p>
<p class="offer">Get well soon Shell!!</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam Carter</p>
<time datetime="2012-06-30" pubdate="pubdate"><p>30th June 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="UrbanAntidotes" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/urban_antidotes.jpg', 'Tigi Bedhead Urban Antidotes') !!}
<h2>Product Focus: Tigi Bedhead 'Urban Antidotes'</h2>
<p>Urban Antidotes is a range of reparative shampoos and conditioners that can be used on any hair type. All 3 stages are colour safe and contain 'hits' of moisture.</p>
<p>I love all 3 of Tigi's Urban Antidotes ranges because no matter what your hair is like there is something for you.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<h3>Urban Antidote No.1 - Re-Energize.</h3>
{!! Html::image('images/newspics/urban_green.jpg', 'igi Bedhead Urban Antidotes') !!}
<p>Perfect for hair that needs a daily 'pick me up'. For 'normal' or 'virgin' hair.</p>
<p>Get your hair back to normal with hydrating, strengthening and shine enhancing shampoo. Livens up moisture by 25%, strengthens weak lifeless hair with weightless shine, promotes colour retension and re-energizes with body and thickness.</p>
<p>Put some oomph back into your tired, over-stimulated hair. Supercharged hydrating conditioner helps strengthen weak hair giving it a rush of shine and health. Blasts weightless shine and detangles unruly locks!!</p>
<p><em>'I think urban antidote No.1 is great if you feel like your hair is flat or dull because in my opinion it does liven up your hair and does give your hair loads of shine!!!!'</em></p>
<h3>Urban Antidote No.2 - Re-Covery</h3>
{!! Html::image('images/newspics/urban_blue.jpg', 'Tigi Bedhead Urban Antidotes') !!}
<p>Helps moisture deprived hair to the ultimate recovery. For damaged tresses hat need a moisture hit.</p>
<p>Recovery Shampoo helps strengthen and give shine to your worn out locks with 4x fewer breaks plus leaves hair 12x smoother. Protects hair from colour fading has U.V and heat protection. It also helps to prevent split ends. 9 out of 10 hairstylists believe it leaves hair instantly healthier.</p>
<p>Re-Covery conditioner drenches moisture deprived hair with a rush of hydration that gets stressed out tresses back to a healthy condition. It moisturises for major softness and protects from thermal and combing damage.</p>
<p><em>I actually use urban antidote No2 and find it leaves my hair feeling healthier! It gives my hair moisture and shine without weighing it down.</em></p>
<h3>Urban Antidote No.3 - Resurrection.</h3>
{!! Html::image('images/newspics/urban_red.jpg', 'Tigi Bedhead Urban Antidotes') !!}
<p>Designed for weak, brittle hair that needs an intervention. It leaves hair 3x stronger and 12x smoother</p>
<p>Bring weak brittle hair back to life with this powerful moisture packed shampoo, with micro sheilds to boost strength and stamina. Its heat and U.V protective, helps keep colour vibrant and zeros in on dry damaged hair.</p>
<p>Resurrection conditioner brings dead-end hair back to life, the formula targets areas in the most need of repair giving it the revival it needs. It has long lasting results with continued repair!</p>
<p><em>I used to use urban antidote No3 because my hair was damaged and dry, but by using this shampoo and conditioner it made my hair healther so i moved on to use No2!</em></p>
<h3>Summary</h3>
<p>To sum on the whole range there is something for everyone, and if you think your hair is beyond repair think again! Even if you start off at the bottom using No3, these shampoo's and conditioners are designed so you can move up the range to finally get to number 1!</p>
</section> <!--end .hidden-->
<p class="author">Published by Laura Hall</p>
<time datetime="2012-07-11" pubdate="pubdate"><p>11th July 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="daniel_anderson" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/dan_logo.jpg', 'Hairdressers Journal') !!}
 <h2>Daniel Anderson Hairdressing Now at Jakata</h2>
 <p>After weeks of speculation, we can now confirm that <em>Daniel Anderson</em> has joined <em>Jakata &amp; Paul Kemp Hairdressing</em>.
  	Adam and Danny have been in recent discussions to finalise the move which had to be kept under wraps until all the details were confirmed. Danny's Winwick Street salon closed last week and the task of making sure the transition was as smooth as possible was implemented. Dan and team members are now located between Jakata (Bridge Street) and Paul Kemp Hairdressing (Sankey Street).</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{!! Html::image('images/newspics/danny.jpg', 'Daniel Anderson') !!}
<p>The two hairdressers have known each other for 15 years,  having completed their initial training together and a few years later worked side by side in another Warrington based salon.</p>
	<p>Adam said <em>'Danny and I go way back, we both have a mutual respect for each others work. This move marks exciting times ahead for the companies involved. The Jakata/Paul Kemp Brands are going from strength to strength and now with Danny on board we can expect great things to happen!'</em></p> 
	<p>Danny Said <em>'It's an exciting time, I want to offer our customers the best experience. Between myself, Adam &amp; Paul we have the ultimate hairdressing team in Warrington!'</em></p>
<p><strong>We'll keep you up to date with the latest developments</strong></p>
</section> <!--end .hidden-->
<time datetime="2012-03-23" pubdate="pubdate"><p>23rd March 2012</p></time>
</article> <!--end #article-->


<article class="article">
<a name="candy_fixations" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/Candy-Fixations.jpg', 'Bedhead Candy Fixations') !!}
<hgroup>
  	<h2>NEW Bedhead 'Candy Fixations'</h2>
  	<p><strong>begging to be whipped, teased, scrunched and smelt</strong></p>
  </hgroup>
  <p>Tigi have taken inspiration from the world of sweets and created an incredible texture range to deliver volume, flexible hold, definition and root lift. Sugar was originally used in the punk era to keep the mohawks standing upright and this new range is all about the ultimate texture.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>There are five products in Candy Fixations range: Mega Whip, Glaze Haze, Totally Baked, Sugar Shock and Sugar Dust.</p>
{!! Html::image('images/newspics/megawhip.jpg', 'Mega Whip') !!}
{!! Html::image('images/newspics/glaze_haze.jpg', 'Glaze Haze') !!}
{!! Html::image('images/newspics/totally-baked.jpg', 'Totally Baked') !!}
{!! Html::image('images/newspics/sugarshock.jpg', 'Sugar Shock') !!}
{!! Html::image('images/newspics/sugar-dust.jpg', 'Sugar Dust') !!}

<ul>
	<li><h5>Mega Whip</h5><p>whips into dry hair for light texture with a flexible hold for shorter styles, or use throughout longer layers for a piecey style definition.</p></li>
	<li><h5>Glaze Haze</h5><p>a sweet treat that candy-coats each strand to fight humidity, adds shine and helps speed up drying time.</p></li>
	<li><h5>Totally Baked</h5><p>Prep your blow-dry with TIGI Bed Head Candy Fixations Totally Baked, a tasty hair meringue, for long-lasting boost of hold, volume and texture.</p></li>
	<li><h5>Sugar Shock</h5><p>Sweet waves, shocking body! Mist TIGI Bed Head Candy Fixations Sugar Shock into hair for a tousled look, or later throughout for extreme texture, fullness and hold.</p></li>
	<li><h5>Sugar Dust</h5><p>a quick fix for your style addiction. Sprinkle into roots to absorb oil and tease for instant volume, or sprinkle throughout layers for texture with staying power.</p></li>
</ul>

<p>Check out this promo video for the range</p>
<p><iframe width="300" height="200" src="http://www.youtube.com/embed/4YSxuWloiqw" frameborder="0" allowfullscreen class="right"></iframe></p>
<p><strong>All product in the range are just £9.50 for a limited time</strong></p>
</section> <!--end .hidden-->
<time datetime="2012-03-15" pubdate="pubdate"><p>15th March 2012</p></time>
</article> <!--end #article-->
<article class="article">
<a name="oils" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/miracleoil_light.jpg', 'BC Oil Miracle') !!}
<h2>Battle of the Oils</h2>
<p>Over the last year or so there has been an influx of Hair oils hitting the market, all offering similar claims of intense conditioning for maximum shine without weighing your hair down (the old style oil treatments left you feeling like you'd had your head dunked in a chip pan!). There are a number of brands that you might recognise: Moroccan Oil, Argan Oil, Mythic Oil etc.
  Last year saw the launch of Schwarzkopf's 'Oil Miracle' and more recently Tigi S Factor's 'True Lasting Color Hair Oil'. We have both these products in the salon (both of which are popular favourites amongst the staff) but which one is better?</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">

<h3>Schwarzkopf Oil Miracle:</h3>
<p><iframe width="300" height="200" src="http://www.youtube.com/embed/6f7oj7mtuk8" frameborder="0" allowfullscreen class="right"></iframe></p>
<p>Opulent Shine. Zero Gravity.</p>
<p>BC Oil Miracle Finishing Treatments are everything a hair oil should be, without overburdening.</p>
  
     
 <h4>Technology</h4>
 
 <p>The unique Evaporating Technology used in the BC Oil Miracle Finishing Treatments allows an even spreading of the product for opulent shine and caressable softness without leaving residues on the hair or overburdening it.
 It is composed of a carrier oil and a precious botanical oil. The carrier oil spreads extremely finely, ensuring that the precious botanical oil is dispersed in a very fine layer – then evaporates while drying. Only the precious oil is left in an ultra-light layer on the hair.</p>
 
 
 <h4>The Results</h4>
  
 <ul>
 	<li>Weightless smoothing</li>
 	<li>Opulent shine</li>
 	<li>Very smooth cuticles and closed hair surface</li>
 </ul>
 {!! Html::image('images/newspics/tigi_oil.jpg', 'Tigi S Factor True Lasting Colour') !!}
 <hgroup>
 	<h3>S-Factor True Lasting Colour</h3>
 	<h4>Hair Oil that shines, softens &amp; seals</h4>
 </hgroup>
 <p>This dual styling and finishing oil infused with ultra-sheer micro-shine oils helps protect colour while imparting surreal shimmer.</p>
 <p>Dispense one pump into palm of hand and run through towel dried hair for smoothness and heat protection during styling. Adjust amount and application to your hair’s length and density</p>
 <p><em>Expert Tip: Finish style by applying to dry hair to smooth frizz and fly-aways.</em></p>
 <h3>The Verdict</h3>
 <p>Both Oils are perfect for prepping the hair before blow-drying. A tiny amount is applied which initially feels like it could be too oily but once applied to the hair it absorbs in - any excess evaporates away.
 They control frizz, enhance shine, speed up blow-drying time and leave the hair soft and silky.</p>
 <h4>So which ones the best?</h4>
 <p>The verdict's out on this one, the <em>Schwarzkopf</em> is a little pricier at <strong>£24.95</strong> but the 2 different options (light and normal to thick hair) offers a more tailored choice. The <em>Tigi</em> oil give great results and probably has the edge in terms of fragrance (I'm yet to find a Tigi product that doesn't smell amazing!). The lower price point will probably appeal too at <strong>under £20</strong></p>
 <p><strong>It's really just down to which brand appeals to you more.</strong></p>
</section> <!--end .hidden-->
<time datetime="2012-03-15" pubdate="pubdate"><p>15th March 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="product_offer" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/bed-head-products.jpg', 'Bed Head') !!}
<h2>3 for 2 on Products</h2>
<p><strong>For a limited time you can get 3 products for the price of 2 on selected ranges!</strong></p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p> Most of the Schwarzkopf and Tigi ranges are part of the deal, simply choose 3 products and get the cheapest absolutely FREE.</p>
<p> Offer ends 29/02/2011</p>
</section> <!--end .hidden-->
<time datetime="2012-01-20" pubdate="pubdate"><p>20th January 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="articleAnchor" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/parkroyale.jpg', 'Charity Hair Styling') !!}
<h2>Jakata Team Style hair for Charity event</h2>
<p>The Jakata and Paul Kemp Team's recently provided the hair styling for a charity fashion evening at the Park Royal Hotel, Stretton.</p>
<p>The event was organised by Joanne Richardson which raised more than £1,000 for St Matthew's pre-school group.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p> Jessobel Boutique supplied the fashion, Clarins did the make-up and the combined Jakata &amp; Paul Kemp teams provided the hair styling.</p>
<p><a href="http://cheshire.greatbritishlife.co.uk/article/st-matthews-ladies-shopping-evening-fundraiser-stretton-38098/">The event was covered in Cheshire Life Magazine (Click to see the article)</a></p>
</section> <!--end .hidden-->
<time datetime="2012-01-20" pubdate="pubdate"><p>20th January 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="NewRecruits" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/vicky.jpg', 'Vikki') !!}
<h2>Introducing Our latest recruits</h2>
<p>Vicky Rowland and Rianne Chester recently joined the team. Both experianced in their own fields, they are a fantastic addition to the team.
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><em>Vikki Rowland</em> joined the Jakata team last month and has quickly made her mark as an exceptionally talented stylist. She has ten years hairdressing experience from working in Warrington salons. </p>
  <p>Her skills are diverse, but she has a special love for all things vintage. As you can see, her own style reflects her passion for pin-up and creating retro styles comes naturally to her.
Vicky describes herself as meticulous, great attention to detail, a perfectionist and always up for a challenge!</p>
<p><strong>Vikki is offering 30% off first appointments with her until the end of January!</strong></p>

</section> <!--end .hidden-->
<time datetime="2012-01-05" pubdate="pubdate"><p>5th January 2012</p></time>
</article> <!--end #article-->

<article class="article">
<a name="GiftVouchers" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/giftvouchers.jpg', 'Gift Vouchers') !!}
<h2>Jakata Hair &amp; Beauty Treatments make the perfect gift this Christmas</h2>
<p><em>Treat your friends and family to a gift they'll really appreciate</em>. Jakata gift vouchers are avaiable as £10, £20, £50 and £100 or we have a voucher where you can specify a particular hair or beauty treatment. They don't have to be redeemed in one go and there is no time limit to when they have to be used either!</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><strong><em>Special offer</em>: If you spend over £40 on vouchers before Christmas you can have any of our Schwarzkopf or Tigi limited edition gift packs for half price! (while stocks last)</strong></p>
</section> <!--end .hidden-->
<time datetime="2011-10-25" pubdate="pubdate"><p>29th October 2011</p></time>
</article> <!--end #article-->

<article class="article">
<a name="Kebelo" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/kebelo.jpg', 'Kebelo System') !!}
<h2>The Next Generation of Smoothing system is here!</h2>
<p>Kebelo System uses a unique three-step process to restore your hair to its optimum, conditioned look and feel, and keep it that way for as long as possible afterwards – up to 100 days of gloriously smooth and shiny hair. That's a lot of stress-free, frizz-free, care-free days.</p>
  <p><strong>It's the end of frizz,<br> 
    it's the beginning of shine;<br> 
  it's the foundation of beautiful hair.</strong></p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>This new treatment is going down a storm in the salon. If you've had or considered having a Brazilian Blow-Dry or a Keratin Treatment, then this is the next generation of them and could be perfect for you.</p>
<p><strong>Prices around £180 (includes aftercare products worth £40)</strong><br>
plus for a limited time: <strong>FREE Cut, Dry &amp; Style or Color Gloss with every treatment</strong></p>
<p><a href="http://www.kebelo.com/" target="_blank">Find out more here&gt;</a></p>
</section> <!--end .hidden-->
<time datetime="2011-10-25" pubdate="pubdate"><p>29th October 2011</p></time>
</article> <!--end #article-->

<article class="article">
<a name="hji" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/hj-cover.jpg', 'Hairdressers Journal') !!}
<h2>Why did we opt to open a second hairdressing salon in Warrington Town Centre?</h2>
<p>An article featured in this weeks <em>Hairdressers Journal</em> speaks to <em>Jakata Hair &amp; Beauty </em>owner Adam Carter about the history of Jakata and the recent launch of <em>Paul Kemp Hairdressing.</em></p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p><a href="mailpics/hj_article.pdf" target="_blank"><strong>To read the full article click here</strong></a></p>
<p>Visit the <em>Hairdressers Journal</em> website for all the latest industry news:<br>
  <p><strong><a href="http://www.hji.co.uk/Home/">www.hji.co.uk</a></strong></p>
</section> <!--end .hidden-->
<time datetime="2011-10-25" pubdate="pubdate"><p>29th October 2011</p></time>
</article> <!--end #article-->


<article class="article">
<a name="midweek" class="anchor"></a>
<section class="visible">
{!! Html::image('images/newspics/redkenarticle.jpg', 'Midweek Guardian Article') !!}</a>
<h2>Have you seen our feature in this weeks Midweek Guardian Yet?</h2>
<p>An article about our recent win at the Redken NYC Awards was published in the Midweek Guardian this week. </p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>If you don't receive it - don't worry - its available here as a <a href="/images/midweek_redken.pdf">PDF download</a></p>
<p><strong>Don't forget to let your friends and family know about the special offer thats mentioned in the article!</strong></p>
</section> <!--end .hidden-->
<time datetime="2011-10-25" pubdate="pubdate"><p>29th October 2011</p></time>
</article> <!--end #article-->

<article class="article">
<a name="Shell"></a>
<section class="visible">
{!! Html::image('images/newspics/new-staff_0965.jpg', 'Michelle') !!}
<h2>New stylist joins the team</h2>
<p> Michelle French recently joined the Jakata hairdressing team. She has been working in Warrington town centre for the last five years for a well known national salon franchise. She decided a change of scenery was in order and chose to join Jakata for her new career path.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>Michelle said &quot;I felt it was time to move on from my previous salon, I needed  some new inspiration - Jakata offer's loads of opportunities to get into competitions and stage work, plus I was blown away by the buzz of the salon when I came in.&quot;<br>
  She continues &quot;I can't wait to get into my new role at Jakata, I already feel a part of the team!&quot;</p>
<p>Michelle loves technical cutting and styling, but equally loves long, curly blowdry's. She's also skilled in men's cutting and styling.<br>
  <strong><br>30% off all services with Michelle until the end of September!</strong>
</p>
</section> <!--end .hidden-->
</article> <!--end .article-->

<article class="article">
<section class="visible">
{!! Html::image('images/newspics/emily_side.jpg', 'Paul Kemp Hairdressing imagary') !!}
<h2>Introducing our brand new sister salon: "Paul Kemp Hairdressing"</h2>
<p>It was months and months in the planning, hours worth of meetings and decision making, but it was well worth the wait. "Paul Kemp Hairdressing" opened it's doors for the first time on the 30th June.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
{!! Html::image('images/newspics/pk_graphic copy.jpg', 'Paul Kemp Hairdressing') !!}    
{!! Html::image('images/newspics/team.jpg', 'Paul Kemp Team') !!}
<p>Jakata had hit full capacity - any one who came in on Saturdays or late nights knows how insanely busy it got! We looked at various options and ways of expanding and decided that a second branch was the answer. With Paul being at the top of his game as a stylist plus his desire to get more involved in the business side of things, it made perfect sense for him to be the figurehead of the new salon and create the opportunity to develop an exciting new hairdressing brand that fitted perfectly with his ideals.</p>
<p>All our ideas locked together perfectly and when the Sankey Street premises became available we snapped it up and started the fit out straight away. The end result: a beautiful, modern, relaxing salon that appeals to anyone who wants to chill out and be pampered.</p>
<p>Joining Paul at the new salon are: Phil, Kelly, Izzy, Lisa, Nathan and introducing new recruit Jo Mahoney (see profile below)</p>
<p><a href="http://www.facebook.com/PaulKempHairdressing"><br>Please visit our Facebook page to keep up to date with Paul Kemp Hairdressing news&gt;</a></p>
</section> <!--end .hidden-->
</article> <!--end .article-->

<article class="article">
<section class="visible">
{!! Html::image('images/newspics/Jo_0581.jpg', 'Joanne Mahoney') !!}
<h2>Meet our latest recruit: Joanne Mahoney </h2>
<p>Joining the newly formed Paul Kemp hairdressing team is senior stylist Jo Mahoney.</p>
<p>Jo has loads of experience from working in salons in Warrington (she's worked with Phil and Paul in the past). She takes a creative approach to cutting and colouring with a strong focus on latest trends.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>As ever with any newbie, we like to run a special offer to help get them up and running, so we're offering </p>
<p><strong>25% off all services with Jo until the end of August!</strong></p>
Just mention when booking.</p>
</section> <!--end .hidden-->
</article> <!--end .article-->

<article class="article">
<section class="visible">
{!! Html::image('images/newspics/redkencomplarge.jpg', 'Redken competition') !!}
<h2>2 out of 3 for the Jakata Artistic Team</h2>
<p>Last month saw the Jakata hairdressing team win 2 awards at the regional finals of the Redken NYC awards.</p>
<p>We were nominated in all three categories. There was a record number of entrants, all of an extremely high calibre. The judging process was pretty grueling, but we got to meet some inspiration stylists like Andrew Barton and Lee Stafford.</p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>It was a fantastic night with Izzy and Nat winning the "Style Innovator" award and Jimmy and Nathan bagging the "Male Expert" award. We now go on to compete in the national final at the Redken Tribe event in London on September 12th.</p>
<p><a href="http://www.facebook.com/media/set/?set=a.10150200540001866.330371.62812381865"><br>
    Visit the Jakata Facebook page for photos of the event&gt;</a></p>
</section> <!--end .hidden-->
</article> <!--end .article-->

<article class="article">
<section class="visible">
{!! Html::image('images/newspics/nicole-kidman-braid.jpg', 'Nicole Kidman braid') !!}
<h2>Summertime Braids</h2>
<p>The big hair styling hit of the summer has definitely been the braid. Taking on all kinds of shapes and forms, it's been seen on catwalks to red carpets to just about anywhere. It's hard to name a celebrity that hasn't been seen wearing their hair in a braid at some point over summer! </p>
<p class="reveal">Read More ></p>
</section> <!--end .visible-->
<section class="hidden">
<p>Braids are even becoming the hairstyle of choice among trendy brides; Brides magazine recently named Nicole Kidman's bohemian style braid a "wedding hairstyle of the week."
Styling your hair into a braid is a great way to try a different look - it's also really simple to achieve.</p>
<p><strong>Why not get your Jakata hair stylist to try the look out on you next time!</strong></p>
</section> <!--end .hidden-->
</article> <!--end .article-->

</section> <!--end #accordion-->

</section> <!--end #news-->

@stop