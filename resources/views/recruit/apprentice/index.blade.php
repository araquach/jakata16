@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Recruitment Admin'
	])
	
@stop

@section('content')

<div id="recruitBlank">

<h1>Apprentices</h1>

<div class="view">
    
<table>
		<tr>
			<th>Application Date</th>
			<th>Applicant Name</th>
			<th>Quality Rating</th>
			<th>Contact Status</th>
		</tr>
		<tr>
		@foreach($apprentices as $apprentice)
			<td>{{ $apprentice->created_at->format('d/m/Y') }}</td>
			<td><a href="/apprentice/{{ $apprentice->id }}">{{ $apprentice->first_name }} {{ $apprentice->second_name }}</a></td>
			<td>{{ $apprentice->quality }}</td>
			<td>{{ $apprentice->contact_status }}</td>
		</tr>
		@endforeach
	</table>

</div>

</div> <!--recruitBlank-->

@stop