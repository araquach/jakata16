@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Stylist Applicants'
	])
	
@stop

@section('content')

<div id="recruitBlank">

<h1>Stylist Applicants</h1>



<div class="view">
	
	<table>
		<tr>
			<th>Date</th>
			<th>Applicant Name</th>
			<th>Salon</th>
			<th>Quality Rating</th>
			<th>Contact Status</th>
		</tr>
		<tr>
		@foreach($stylists as $stylist)
			<td>{{ $stylist->created_at->format('d/m/Y') }}</td>
			<td><a href="/stylist/{{ $stylist->id }}">{{ $stylist->first_name }} {{ $stylist->second_name }}</a></td>
			<td>{{ $stylist->salon_id }}</td>
			<td>{{ getQuality($stylist->quality) }}</td>
			<td>{{ getContactStatus($stylist->contact_status) }}</td>
		</tr>
		@endforeach
	</table>

</div>



</div> <!--recruitBlank-->

@stop