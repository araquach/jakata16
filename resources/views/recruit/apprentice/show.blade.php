@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Apprentice Applicant'
	])
	
@stop

@section('content')

<div id="admin">

<h1>Apprentice Name: {{ $apprentice->first_name }} {{ $apprentice->second_name }}</h1>
<h2>Applied to: {{ $apprentice->salon_id }}</h2>

<ul>
    <li><strong>Application date:</strong> {{ $apprentice->created_at->format('d/m/Y') }}</li>
    <li><strong>Age:</strong> {{ $apprentice->age }}</li>
    <li><strong>Address 1:</strong> {{ $apprentice->address1 }}</li>
    <li><strong>Address 2:</strong> {{ $apprentice->address2 }}</li>
    <li><strong>Town/City:</strong> {{ $apprentice->town }}</li>
    <li><strong>Postcode: </strong> {{ $apprentice->postcode }}</li>
    <li><strong>Email Address:</strong> {{ $apprentice->email }}</li>
    <li><strong>Phone Number:</strong> {{ $apprentice->phone }}</li>
    <li><strong>Mobile Number:</strong> {{ $apprentice->mobile }}</li>
    <li><strong>Current Employment: </strong> {{ $apprentice->current_emp }}</li>
    <li><strong>In Salon?:</strong> {{ $apprentice->in_salon }}</li>
    <li><strong>Salon Name:</strong> {{ $apprentice->salon_name }}</li>
    <li><strong>School Qualifications:</strong> {{ $apprentice->qualification_school }}</li>
    <li><strong>Hairdressing Qualifications:</strong> {{ $apprentice->qualification_hair }}</li>
    <h3>Rate your experience in the following areas (1-5)</h3>
    <li><strong>Cutting:</strong> {{ $apprentice->cutting }}</li>
    <li><strong>Styling:</strong> {{ $apprentice->styling }}</li>
    <li><strong>Colouring:</strong> {{ $apprentice->colouring }}</li>
    <li><strong>Mens Hairdressing:</strong> {{ $apprentice->men }}</li>
    <li><strong>Extensions:</strong> {{ $apprentice->extensions }}</li>
    <li><strong>Chemical Straightening:</strong> {{ $apprentice->chem_straightening }}</li>
    <li><strong>Brazilian Blowdy's:</strong> {{ $apprentice->brazil_blow }}</li>
    <li><strong>Hair Up Styling:</strong> {{ $apprentice->hair_up }}</li>
    <br>
    <li><strong>About You:</strong><br>{{ $apprentice->about }}</li>
    <li><strong>Why did you choose hairdressing?:</strong><br>{{ $apprentice->why_hairdressing }}</li>
    <li><strong>Why did you choose the salon?:</strong><br>{{ $apprentice->why_us }}</li>
</ul>

<ul>
    @if( $apprentice->quality)
    <li><strong>Quality of candidate:</strong> {{ $apprentice->quality }}</li>
    @endif
    
    @if( $apprentice->contact_status)
    <li><strong>Contact Status:</strong> {{ $apprentice->contact_status }}</li>
    @endif
</ul>

<h3></h3>Notes:</h3>
    
<ul>
     @foreach($apprentice->notes as $note)
     
    <li class="note">{{ $note->created_at->format('d/m/Y') }} - {{ $note->note }}</li>
    
    @endforeach
</ul>

<a href="/apprentice/{{ $apprentice->id }}/edit" class="link-button">Admin notes</a><br>

{!! link_to('apprentice', 'Back to all the applicants', ['class' => 'link-button']) !!}

</div>

@stop