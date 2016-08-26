{!! Form::model($stylist, [
    'method' => 'PATCH',
    'route' => ['stylist.update', $stylist->id]
]) !!}
	
	<div class="row">
		{!! Form::label('quality', 'Rate the applicant') !!}
		{!! Form::select('quality', array(
			'1' => 'Discard',
			'2' => 'Put on backburner',
			'3' => 'Has Potential',
			'5' => 'We need them',
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

{!! Form::close() !!}