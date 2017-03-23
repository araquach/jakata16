@extends('emails.prospect.template.large_2image')


@section('background_colour')
    #dce1e9
@stop

@section('optional')
    
@stop
    
<!--Image 1200px x 400px-->
@section('hero_image')
   {{ asset('images/prospect/email/email_header.jpg') }}
@stop

@section('section1')
    <span style="font-size: 20px;">Hi Adam,</span>
    <br><br>
    <strong>Thanks for applying for your FREE products</strong>
    <br><br>
    we've selected a range that's ideal for your hair texture and condition. We'll let you know when they're on the way to you.
@stop

<!--Image 200px wide-->
@section('image_left')
    http://placehold.it/200
@stop

<!--Image 200px wide-->
@section('image_right')
    http://placehold.it/200
@stop

@section('section2')
    <strong>As you've never been to Jakata before we'd love you to experience the salon for yourself.</strong> 
    <br><br>We have a team of ten talented, friendly staff ready to look after you.
    We've won numerous hairdressing awards and you only have to look at our customer testimonials and Facebook reviews to see how highly rated we are.
    <br><br>
    <a href="https://www.facebook.com/JakataSalon/">Jakata Facebook page</a>
@stop

@section('section3')
    Based on the information you gave, we think Matt Lane & Laura Minnett would be great stylists for you to try. 
    We're sending out a voucher along with your products so you can  experience a FREE Blow Dry and Smoothing treatment with either of them. 
    <br><br>
    <strong>I'm sure once you've experienced Jakata you won't want to go anywhere else!</strong>
@stop

@section('section4')
    Thanks again and we look forward to seeing you soon!
    <br><br>
    <span style="font-size: 20px;">The JAKATA team</span>
@stop


@section('footer_colour')
    color: #999999;" bgcolor="#3f4960
@stop

