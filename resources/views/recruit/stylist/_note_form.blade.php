{!! Form::model($stylistNote, [
    'method' => 'POST',
    'route' => ['stylist.note', $stylistNote->id]
]) !!}
	
	<div class="form">
		
			{!! Form::hidden('stylist_id) !!}
		
		<div class="row">
			{!! Form::label('note', 'Create Note') !!}
			{!! Form::textarea('note') !!}
			{!! $errors->first('note', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
	</div>

{!! Form::close() !!}