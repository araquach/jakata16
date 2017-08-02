@extends('layouts.main') 

@section('head')

@include('layouts.partials.head')
	
@stop

@section('content')

<div id="admin">
    
	<h1>Test</h1>
	
	<h2>Jakata</h2>
	
	<h3>With Votes</h3>
	
	@foreach($withVotes as $withVote)
		@if($withVote->salon_id == 1 && $withVote->vote_count < $jakStaffCount)
			<p>{{ $withVote->name }}</p>
		@endif
	@endforeach
	
	@foreach($noVotes as $noVote)
		@if($noVote->salon_id == 1)
			<p>{{ $noVote->name }}</p>
		@endif
	@endforeach
		

</div>

@stop