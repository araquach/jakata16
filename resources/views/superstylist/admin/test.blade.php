@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="admin">
    
	<h1>Test</h1>
	
	<h2>Jakata</h2>
	
	@foreach($recipients as $recipient)
		@if($recipient->salon_id == 1 && $recipient->votes->count() < $jakStaffCount->count() -1)
			<p>{{ $recipient->name }} : {{ $recipient->votes->count() }} : {{ $jakStaffCount->count() -1 }}</p>
		@endif
	@endforeach
	
	<h2>PK</h2>
	
	@foreach($recipients as $recipient)
		@if($recipient->salon_id == 2 && $recipient->votes->count() < $pkStaffCount->count() -1)
			<p>{{ $recipient->name }} : {{ $recipient->votes->count() }} : {{ $pkStaffCount->count() -1 }}</p>
		@endif
	@endforeach
		

</div>

@stop