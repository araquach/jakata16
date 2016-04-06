@extends('layouts.main')

@section('content')

<div id="application">

<h1>Stylist Name: {{ $stylist->first_name }} {{ $stylist->second_name }}</h1>

<ul>
    <li><strong>Date:</strong> {{ $stylist->date }}</li>
    <li><strong>Address 1:</strong> {{ $stylist->address1 }}</li>
    <li><strong>Address 2:</strong> {{ $stylist->address2 }}</li>
    <li><strong>Postcode:</strong> {{ $stylist->postcode }}</li>
    <li><strong>Email Address:</strong> {{ $stylist->email }}</li>
    <li><strong>Phone Number:</strong> {{ $stylist->phone }}</li>
    <li><strong>Mobile Number:</strong> {{ $stylist->mobile }}</li>
    <li><strong>Current Employment:</strong> {{ $stylist->current_emp }}</li>
    <li><strong>Current Place of Work:</strong> {{ $stylist->current_emp_des }}</li>
    <li><strong>School Qualifications:</strong> {{ $stylist->school_qual }}</li>
    <li><strong>Other Qualifications:</strong> {{ $stylist->qual_non_hair }}</li>
    <h3>Skill Sets</h3>
    <li><strong>Stock:</strong> {{ $stylist->adex_stock }}</li>
    <li><strong>Management:</strong> {{ $stylist->adex_manage }}</li>
    <li><strong>Training:</strong> {{ $stylist->adex_train }}</li>
    <li><strong>Reception:</strong> {{ $stylist->adex_reception }}</li>
    <li><strong>Marketing:</strong> {{ $stylist->adex_marketing }}</li>
    <li><strong>Customer Service:</strong> {{ $stylist->adex_cservice }}</li>
    <br>
    <li><strong>Experience:</strong> {{ $stylist->experience }}</li>
    <li><strong>Current Position:</strong> {{ $stylist->current_position }}</li>
    <li><strong>Client Base?:</strong> {{ $stylist->client_base }}</li>
    <li><strong>Qualifications:</strong> {{ $stylist->qualifications }}</li>
    <h3>Rate yourself at the following (1-5)</h3>
    <li><strong>Cutting Skills:</strong> {{ $stylist->cutting_skills }}</li>
    <li><strong>Colour Knowledge:</strong> {{ $stylist->colour_knowledge }}</li>
    <li><strong>Colour Skills:</strong> {{ $stylist->colour_skills }}</li>
    <li><strong>Men's Cutting:</strong> {{ $stylist->men }}</li>
    <li><strong>Woven Extensions:</strong> {{ $stylist->extensions_weave }}</li>
    <li><strong>Individual Extensions:</strong> {{ $stylist->extensions_other }}</li>
    <li><strong>Chemiocal Straightening:</strong> {{ $stylist->chem_straighten }}</li>
    <li><strong>Brazilian Blowdrys:</strong> {{ $stylist->braz_blow }}</li>
    <li><strong>Hair Up Styling:</strong> {{ $stylist->hair_up }}</li>
    <br>
    <li><strong>Any Hair awards?</strong><br> {{ $stylist->awards }}</li>
    <li><strong>About You</strong> {{ $stylist->about_you }}</li>
    <li><strong>Why did you choose hairdressing?</strong><br> {{ $stylist->why_hairdressing }}</li>
    <li><strong>Why did you choose Jakata?</strong><br> {{ $stylist->why_jakata }}</li>
</ul>

</div>

@stop