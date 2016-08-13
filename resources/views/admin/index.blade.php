@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Admin'
	])
	
@stop

@section('content')

<div id="admin">

	<h1>Admin Menu</h1>
	
	<ul>
		<li>{!! link_to('stylist', 'Stylist Applicants') !!}</li>
		<li>{!! link_to('apprentice', 'Apprentice Applicants') !!}</li>
	</ul>

</div> <!--admin-->

@stop