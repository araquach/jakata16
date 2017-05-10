@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Taster Package Appliaction'
	])
	
@stop

@section('content')

<div id="blank">

	<h1>Taster Package Applicants</h1>
	
	<div class="view">
    
        <table>
    		<tr>
    			<th>Date</th>
    			<th>Name</th>
    			<th>Stylists</th>
    			<th>Status</th>
    		</tr>
    		<tr>
    		@foreach($prospects as $prospect)
    			<td>{{ $prospect->created_at->format('d/m/Y') }}</td>
    			<td><a href="/prospect/taster/{{ $prospect->id }}">{{ $prospect->first_name }} {{ $prospect->last_name }}</a></td>
    			<td>{{ getStylists($prospect->cut_spend, $prospect->colour_spend, $prospect->gender) }}</td>
    			<td>{{ $prospect->contact_status }}</td>
    		</tr>
    		@endforeach
	    </table>

    </div>
	
</div>

@stop