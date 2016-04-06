@extends('layouts.main')

@section('content')

<div id="application">

<h1>Apprentice Name: {{ apprentice->first_name }} {{ apprentice->second_name }}</h1>

<ul>
    <li>{{ $apprentice->address1 }}</li>
    <li>{{ $apprentice->address2 }}</li>
    <li>{{ $apprentice->postcode }}</li>
    <li>{{ $apprentice->email }}</li>
    <li>{{ $apprentice->mobile }}</li>
</ul>

</div>

@stop