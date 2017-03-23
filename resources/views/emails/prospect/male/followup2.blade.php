@extends('emails.prospect.template.minimal')


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
    <span style ="font-size: 20px; line-height: 30px;">Just to let you know, your products have been sent in the post to you. They should be with you soon.</span>
@stop

@section('section2')
    We've included a voucher for <strong>50% off</strong> with either -- Matt Lane or Laura Minnett -- that you can take advantage of over the coming months. 
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







