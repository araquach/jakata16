@extends('emails.prospect.template.minimal')


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
    <span style="font-size: 20px;">Hi {{-- $first_name --}},</span>
    <br><br>
    <br><span style ="font-size: 20px; line-height: 30px;">Just to let you know, your products have been sent in the post to you. They should be with you soon!</span><br>
    <strong></strong>
    <br>
    We've included a voucher for a FREE Blow-dry and  -- Smoothing Conditioning treatment -- that you can take advantage of over the coming months. 
    <br><br>
    Just call <strong>01925 242960</strong> to book in.
@stop

@section('section2')
    <strong>We look forward to seeing you soon in the salon soon.</strong>
@stop

@section('footer_colour')
    color: #999999;" bgcolor="#3f4960
@stop

