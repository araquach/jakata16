@extends('layouts.main')

@section('content')

<div id="recruitBlank">

<h1>Apprentices</h1>

<div class="view">

	<b>Apprentice ID:</b>
	{{ $id }}
	<br />
	
	<b>Date:</b>
	{{ $date }}
	<br />

	<b>First Name:</b>
	{{ $first_name }}
	<br />
	
	<b>Second Name:</b>
	{{ $last_name }}
	<br />
	
	<b>Age:</b>
	{{ $age }}
	<br />

</div>


</div> <!--recruitBlank-->

@stop