@extends('layouts.main')

@section('content')

<div id="recruitBlank">

<h1>Apprentices</h1>

@foreach($apprentices as $apprentice)

<div class="view">
    
<a href="/apprentice/{{ $apprentice->id }}">{{ $apprentice->first_name }}</a>

</div>

@endforeach

</div> <!--recruitBlank-->

@stop