@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="admin">
    
	<h1>Votes</h1>
	
	<h2>Jakata</h2>
	
	<table>
		@foreach($jakStaffs as $jakStaff)
		<tr>
			<td>{{ $jakStaff->name }}</td>
			<td>{{ count($jakStaff->votes) }} / {{ count($jakStaffs) -1 }}</td>
		</tr>
		@endforeach
	</table>
	
	<h2>PK</h2>
	
	<table>
		@foreach($pkStaffs as $pkStaff)
		<tr>
			<td>{{ $pkStaff->name }}</td>
			<td>{{ count($pkStaff->votes) }} / {{ count($pkStaffs) -1 }}</td>
		</tr>
		@endforeach
	</table>

</div>

@stop