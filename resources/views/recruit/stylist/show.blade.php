@extends('layouts.main')

@section('content')

<div id="application">

<h1>Stylist Name: {{ $stylist->first_name }} {{ $stylist->second_name }}</h1>

<ul>
    <li>{{ $stylist->address1 }}</li>
    <li>{{ $stylist->address2 }}</li>
    <li>{{ $stylist->postcode }}</li>
    <li>{{ $stylist->email }}</li>
    <li>{{ $stylist->mobile }}</li>
</ul>

</div>

@stop