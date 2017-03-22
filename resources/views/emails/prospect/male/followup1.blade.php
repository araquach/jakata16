@extends('emails.prospect.template.template')


@section('background_colour')
    #333333
@stop

@section('optional')
    Your products are on their way!
@stop
    
<!--Image 1200px x 400px-->
@section('hero_image')
   {{ asset('images/prospect/email/email_header_man.jpg') }}
@stop

@section('section1')
    <strong>Thanks for your interest in Jakata</strong> - your requested products are on their way. We've selected products that specifically suit your hair type and texture
@stop

@section('section2')
    Section 2 text
@stop

<!--Image 200px wide-->
@section('image2')
    http://placehold.it/200
@stop

@section('section3')
    Section 3 Text
@stop

<!--Image 200px wide-->
@section('image3')
    http://placehold.it/200
@stop

@section('section4')
    Section 4 text
@stop

<!--bottom panel text-->
@section('section5')
    Section 5 Text
@stop

@section('footer_colour')
    color: #999999;" bgcolor="#666666
@stop