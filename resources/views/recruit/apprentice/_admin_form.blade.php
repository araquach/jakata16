{!! Form::model($apprentice, [
    'method' => 'PATCH',
    'route' => ['apprentice.update', $apprentice->id]
]) !!}
	
	<div class="form">
		<div class="row">
			{!! Form::label('quality', 'Rate the applicant') !!}
			{!! Form::select('quality', array(
				'1' => 'We need them',
				'2' => 'Has Potential',
				'3' => 'Put on backburner',
				'4' => 'Discard',
				), old('quality'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('quality', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row">
			{!! Form::label('contact_status', 'Contact Status') !!}
			{!! Form::select('contact_status', array(
				'1' => 'Not Contacted',
				'2' => 'Left Message',
				'3' => 'Spoke Direct',
				), old('contact_status'), ['placeholder' => '-- Please Select --']) !!}
			{!! $errors->first('contact_status', '<div class="errorMessage">:message</div>') !!}
		</div>
		
		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>
	</div>

{!! Form::close() !!}