@extends('layouts.main')

@section('content')

<div id="recruitBlank">

<h1>Stylists</h1>

@foreach($stylists as $stylist)

<div class="view">
    
<a href="/stylist/{{ $stylist->id }}">{{ $stylist->first_name }} {{ $stylist->second_name }} </a>

</div>

@endforeach

</div> <!--recruitBlank-->

@stop