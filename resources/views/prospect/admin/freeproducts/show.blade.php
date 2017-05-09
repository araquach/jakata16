@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Free Products Applicant'
	])
	
@stop

@section('content')

<div id="admin">

<h1>Applicant Name: {{ $prospect->first_name }} {{ $prospect->last_name }}</h1>

{{--

@if(count($prospect->notes) > 0)
<h2>Notes:</h2>
@endif
<ul>
    @foreach($prospect->notes as $note)
     
        <li class="note">{{ $note->created_at->format('d/m/Y') }} - {{ $note->note }}</li>
    
    @endforeach
</ul>

--}}

<ul>
    <li><strong>Application date:</strong> {{ $prospect->created_at->format('d/m/Y') }}</li>
    <li><strong>Email Address:</strong> {{ $prospect->email }}</li>
    <li><strong>Mobile Number:</strong> {{ $prospect->mobile }}</li>
    <li><strong>Address 1:</strong> {{ $prospect->address1 }}</li>
    <li><strong>Address 1:</strong> {{ $prospect->address2 }}</li>
    <li><strong>Town/City:</strong> {{ $prospect->town }}</li>
    <li><strong>Postcode:</strong> {{ $prospect->postcode }}</li>
    <li><strong>Regular:</strong> {{ $prospect->regular }}</li>
    <li><strong>Hair Texture:</strong> {{ $prospect->texture }}</li>
    <li><strong>Hair Condition:</strong> {{ $prospect->condition }}</li>
    <li><strong>Suitable Stylists:</strong> {{ getStylists($prospect->cut_spend, $prospect->colour_spend, $prospect->gender) }}</li>
    
    
</ul>

<ul>
    @if( $prospect->contact_status)
    <li><strong>Contact Status:</strong> {{ getContactStatus($prospect->contact_status) }}</li>
    @endif
</ul>

<a href="/prospect/admin/freeproducts/{{ $prospect->id }}/edit" class="link-button">Admin notes</a><br>

{!! link_to('prospect/admin', 'Back to all the applicants', ['class' => 'link-button']) !!}

</div>

@stop