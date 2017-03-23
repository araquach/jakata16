@extends('emails.prospect.template.large_2image')


@section('background_colour')
    #333333
@stop

@section('optional')
    
@stop
    
<!--Image 1200px x 400px-->
@section('hero_image')
   {{ asset('images/prospect/email/email_header_man.jpg') }}
@stop

@section('section1')
    <span style="font-size: 20px;">Hi Adam,</span>
    <br><br>
    <strong>Thanks for applying for your FREE products.</strong>
    <br><br>
    We've selected products we hope are suitable for your hair type and texture. We'll let you know when they're on the way to you.
@stop

@section('section2')
    As you've never been to Jakata before we'd really like you to experience the salon for yourself. 
    We have a team of ten talented, friendly staff ready to look after you, all highly skilled in men's hairdressing. <br>
    We've won numerous awards and you only have to look at our customer testimonials and Facebook reviews to see how highly rated we are.
    <br><br>
    -- Facebook link --
@stop

<!--Image 200px wide-->
@section('image_left')
    http://placehold.it/200
@stop

<!--Image 200px wide-->
@section('image_right')
    http://placehold.it/200
@stop

@section('section3')
    Based on the information you gave, we think -- Matt Lane & Laura Minnett -- would be great stylists for you to try. <br>
    We're sending out a voucher along with your products to give you<br> <strong>50% off a Cut & Style</strong> with either of them. 
    <br><br>
    <strong>I'm sure once you've experienced Jakata you won't want to go anywhere else!</strong>
@stop

@section('section4')
    Thanks again and we look forward to seeing you soon!
    <br><br>
    The JAKATA team
@stop

@section('footer_colour')
    color: #999999;" bgcolor="#666666
@stop