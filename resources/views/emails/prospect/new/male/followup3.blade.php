{{-- male follow up 3 --}}

@extends('emails.prospect.template.large_2image')

@section('background_colour')
    #333333
@stop

@section('optional')
    
@stop
    
<!--Image 600px x 300px-->
@section('hero_image')
   http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/email_header_man.jpg
@stop

@section('section1')
    <span style="font-size: 20px;">@if(App::isLocal())
                                        Hi {{ $prospect->first_name }}, 
                                    @else 
                                        Hi {{ $first_name }}, 
                                    @endif</span>
    <br><br>
    <strong>Just checking that you received your products and that you're happy with them. We have a huge range of professional products and treatments in the salon, we hope we selected ones that suit your hair.</strong>
    <br><br>
    If your products haven't arrived yet or if you are unhappy with them, let us know 01925 242960.
@stop

@section('section2')
    <strong>Don't forget to take advantage of your 50% off voucher. If you've misplaced your it, don't worry just show this message with your unique offer ID:
    <br><br>
    OFFER CODE</strong>
@stop

<!--Image 200px wide-->
@section('image_left')
    http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/man_pic.jpg
@stop

<!--Image 200px wide-->
@section('image_right')
    http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/men_products.jpg
@stop

@section('section3')
    To book in just call 01925 242960
    <br><br>
    <strong>I'm sure once you've experienced Jakata you won't want to go anywhere else!</strong>
@stop

@section('section4')
    We look forward to seeing you soon!
    <br><br>
    <span style="font-size: 20px;">The JAKATA team</span>
@stop

@section('footer_colour')
    color: #999999;" bgcolor="#666666
@stop