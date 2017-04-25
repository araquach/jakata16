{!! Form::open(array(
	'action' => 'ProspectController@tasterStore', 'id' => 'prospect-form'
)) !!}

<div class="form">
	
    @if (count($errors) > 0)
    
    <div id="prospect-form_es_" class="errorSummary">
    		<p>Please fix the following input errors:</p>
    		<ul>
    	   		 @foreach($errors->all() as $error)
    	        <li>{{{ $error }}}</li>
    	    	@endforeach
    		</ul>
    </div>
       
    @endif
    
    {!! Form::hidden('gender', 'F') !!}
    
    {!! Form::hidden('prospect_type', 2) !!}
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('first_name', 'First Name') !!}
    	{!! Form::text('first_name', old('first_name')) !!}
    	{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('last_name', 'Last Name') !!}
    	{!! Form::text('last_name', old('last_name')) !!}
    	{!! $errors->first('last_name', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('email', 'Email Address') !!}
    	{!! Form::text('email', old('email')) !!}
    	{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('mobile', 'Mobile Number') !!}
    	{!! Form::text('mobile', old('mobile')) !!}
    	{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    {!! Form::hidden('address1', 'NA') !!}
    
    {!! Form::hidden('town', 'NA') !!}
    
    {!! Form::hidden('postcode', 'NA') !!}
    
    {!! Form::hidden('texture', 'NA') !!}
    
    {!! Form::hidden('condition', 'NA') !!}
    
    <div class="row">
    	{!! Form::label('cut_spend', 'How much do you spend on average for a cut and blow?') !!}
    	{!! Form::select('cut_spend', array(
    		'1' => 'Less than &pound;10',
    		'2' => '&pound;10 to &pound;20',
    		'3' => '&pound;20 to &pound;30',
    		'4' => '&pound;30 to &pound;40',
    		'5' => '&pound;40 to &pound;50',
    		'6' => 'More than &pound;50'
    		), old('cut_spend'), ['placeholder' => '-- Please Select --']) !!}
    	{!! $errors->first('cut_spend', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row">
    	{!! Form::label('colour_spend', 'What is your average spend on colour services?') !!}
    	{!! Form::select('colour_spend', array(
    		'1' => 'Less than &pound;10',
    		'2' => '&pound;10 to &pound;20',
    		'3' => '&pound;20 to &pound;30',
    		'4' => '&pound;30 to &pound;40',
    		'5' => '&pound;40 to &pound;50',
    		'6' => 'More than &pound;50',
    		'0' => 'I dont have colour'
    		), old('colour_spend'), ['placeholder' => '-- Please Select --']) !!}
    	{!! $errors->first('colour_spend', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row regular">
        {!! Form::label('regular', 'Click here if you have been to Jakata before') !!}
        {!! Form::checkbox('regular') !!}
        {!! $errors->first('regular', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row buttons">
    	{!! Form::submit('Send') !!}
    </div>

</div>

{!! Form::close() !!}