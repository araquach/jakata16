{{-- male follow up 2 --}}

@extends('emails.prospect.template.minimal')

@section('background_colour')
    #333333
@stop

@section('optional')
    
@stop
    
<!--Image 600px x 300px-->
@section('hero_image')
   http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/email_header_man_2.jpg
@stop

@section('section1')
    <span style="font-size: 20px;">@if(App::isLocal())
                                        Hi {{ $prospect->first_name }},
                                    @else 
                                        Hi {{ $prospect->first_name }}, 
                                    @endif</span>
    <br><br>
    <span style ="font-size: 20px; line-height: 30px;">Just to let you know, your products have been sent in the post to you. They should be with you soon.</span>
@stop

@section('section2')
    We've included a voucher for <strong>50% off</strong> with either <strong>@if(App::isLocal())
                                        {!! getStylists($prospect->cut_spend, $prospect->colour_spend, $prospect->gender) !!}
                                    @else 
                                        {!! getStylists($cut_spend, $colour_spend, $gender) !!}
                                    @endif 
    </strong> that you can take advantage of over the coming months. 
    <br><br>
    Just call <strong>01925 242960</strong> to book in.
    <br><br>
    <strong>We look forward to seeing you soon in the salon soon.</strong>
    <br><br>
    <strong>The Jakata Team</strong>
    
@stop

@section('footer_colour')
    color: #999999;" bgcolor="#666666
@stop







