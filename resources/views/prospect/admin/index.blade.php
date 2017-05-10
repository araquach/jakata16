@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Prospect Admin'
	])
	
@stop

@section('content')

<div id="admin">

	<h1>Prospect Admin</h1>
	
	<ul>
		<li>{!! link_to('prospect/taster', 'Taster Package applicants', ['class' => 'link-button']) !!}</li>
		<li>{!! link_to('prospect/freeproducts', 'Free Product applicants', ['class' => 'link-button']) !!}</li>
	</ul>



</div>

@stop