{{-- female follow up 1 --}}

@extends('emails.prospect.template.large_2image')

@section('background_colour')
    #2d2d31
@stop

@section('optional')
    
@stop
    
<!--Image 600px x 300px-->
@section('hero_image')
   http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/email_header_2.jpg
@stop

@section('section1')
    <span style="font-size: 20px;">@if(App::isLocal())
                                        Hi {{ $prospect->first_name }}, 
                                    @else 
                                        Hi {{ $first_name }},
                                    @endif</span>
    <br><br>
    Thanks for your interest in our <strong>New Client Taster Package.</strong>
    <br><br>
    We think it's a great way for you to get a taste of how talented our diverse team are, especially as going to a new salon can be such a daunting prospect!
@stop

<!--Image 200px wide-->
@section('image_left')
    http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/female_pic.jpg
@stop

<!--Image 200px wide-->
@section('image_right')
    http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/female_products.jpg
@stop

@section('section2')
    <strong>As you've never been to Jakata before we'd love you to experience the salon for yourself - and it's completely FREE</strong> 
    <br><br>Our team of ten talented, friendly staff are ready to look after you.
    We've won numerous hairdressing awards and you only have to look at our customer testimonials and Facebook reviews to see how highly rated we are.
    <br><br>
    <a href="https://www.facebook.com/JakataSalon/">Jakata Facebook page</a>
@stop

@section('section3')
    Based on the information you gave, we think <strong>@if(App::isLocal())
                                        {!! getStylists($prospect->cut_spend, $prospect->colour_spend, $prospect->gender) !!}
                                    @else 
                                        {!! getStylists($cut_spend, $colour_spend, $gender) !!}
                                    @endif </strong>
    would be great for you to try. <strong>Our reception team will contact you soon to arrange a suitable time for you to book in with us for your package.</strong>
    <br><br>
    <strong>Here's what you can expect on the day:</strong>
    <br>
    <ul>
		<li>Time out to asses your hair</li>
		<li>Styling advice from an experienced professional</li>
		<li>Discuss future and current fashion trends</li>
		<li>A FREE blow dry or dry styling</li>
		<li>Haircare tips and product information</li>
		<li>A plan set for any hair recovery you may need</li>
		<li>Start things moving towards achieving the look you want</li>
		<li>Make you aware of any special offers on future appointments</li>
	</ul>
	You'll get to experience the salon and meet our fantastic team. 
			We'll discuss all your hair needs, advise you on styling, products and let you know the best route to achieving the hairstyle you've always wanted!<br>
    <strong>You'll also get to take away some FREE products too!</strong>
@stop

@section('section4')
    Thanks again and we look forward to seeing you soon!
    <br><br>
    <span style="font-size: 20px;">The JAKATA team</span>
@stop


@section('footer_colour')
    color: #888888;" bgcolor="#d7e8f7
@stop

