{!! Form::open(array(
	'action' => 'ApprenticeController@storeNote'
)) !!}
	
	<div class="form">
		
			{!! Form::hidden('apprentice_id', $apprentice->id) !!}
		
		<div class="row">
			{!! Form::label('note', 'Create Note') !!}
			{!! Form::textArea('note') !!}
			{!! $errors->first('note', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
	</div>

{!! Form::close() !!}