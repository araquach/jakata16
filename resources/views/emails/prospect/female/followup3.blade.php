{{-- female follow up 3 --}}

@extends('emails.prospect.template.2column')

@section('background_colour')
    #2d2d31
@stop

@section('optional')
    
@stop
    
<!--Image 600px x 300px-->
@section('hero_image')
   http://2183bb2632b00d8aa0b3-40e51394fe766397114262205a4ab22d.r37.cf5.rackcdn.com/email_header_3.jpg
@stop

@section('section1')
    <span style="font-size: 20px;">@if(App::isLocal())
                                        Hi {{ $prospect->first_name }}, 
                                    @else 
                                        Hi {{ $first_name }}, 
                                    @endif</span>
    <br><br>
    <strong>Just checking that you received your products and that you're happy with them.</strong>
    <br>
    We have a huge range of professional products and treatments in the salon, we hope we selected ones that suit your hair.
@stop

@section('section2')
    If your products haven't arrived yet or if you are unhappy with them, let us know on 01925 242960.
    <br><br>
    Don't forget to take advantage of your <strong>FREE blow dry and @if(App::isLocal())
                                        {!! getTreatment($prospect->texture, $prospect->condition) !!} 
                                    @else 
                                        {!! getTreatment($texture, $condition) !!}
                                    @endif
    treatment. </strong>
    <br>If you've misplaced your voucher, don't worry just show this message with your unique offer ID:
    <br><br>
    <span style="font-size: 20px;">OFFER: -- offer id --</span>
    <br><br>
    <strong>To book in just call 01925 242960</strong>
@stop

<!--Image 200px wide-->
@section('image2')
    http://placehold.it/200
@stop

@section('section3')
    Matt Lane
@stop

<!--Image 200px wide-->
@section('image3')
    http://placehold.it/200
@stop

@section('section4')
    Laura Minnett
@stop

<!--bottom panel text-->
@section('section5')
    We look forward to seeing you soon!
    <br><br>
    <span style="font-size: 20px;">The JAKATA team</span>
@stop

@section('footer_colour')
    color: #FFFFFF;" bgcolor="#c1cbe8
@stop

