@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Are you looking to join a dynamic hairdressing team?',
	'keywords' => 'hair recruitment warrington, hairdressing jobs warrington, stylist jobs warrington, ',
	'ogtitle' => 'Are you looking to join a dynamic hairdressing team?',
	'ogdescription' => 'Join Our Team',
	'ogimage' => url('/') . '/images/',
	'title' => 'Jakata Salon - Join Our Hairdressing Team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="admin">
    <h1>Potential Employees</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Employment</th>
            <th>Mobile</th>
            <th>Date</th>
            <th>Contact Status</th>
        </tr>
         @foreach($potentials as $potential)
        <tr>
            <td>{{ $potential->full_name }}</td>
            <td>{{ $potential->position }}</td>
            <td>{{ $potential->mobile }}</td>
            <td>{{ $potential->created_at->format('d/m/Y') }}</td>
            <td>{{ $potential->status }}</td>
        </tr>
        @endforeach
    </table>
</div>

@stop