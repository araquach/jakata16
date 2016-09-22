{!! Form::open(array(
	'action' => 'StylistController@storeNote'
)) !!}
	
	<div class="form">
		
			{!! Form::hidden('stylist_id', $stylist->id) !!}
		
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