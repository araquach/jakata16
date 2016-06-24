{!! Form::open(array(
	'action' => 'ProspectController@store', 'id' => 'prospect-form'
)) !!}

<div class="form">

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	

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
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('address1', 'Address 1') !!}
    	{!! Form::text('address1', old('address1')) !!}
    	{!! $errors->first('address1', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('address2', 'Address 2') !!}
    	{!! Form::text('address2', old('address2')) !!}
    	{!! $errors->first('address2', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('town', 'Town') !!}
    	{!! Form::text('town', old('town')) !!}
    	{!! $errors->first('town', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('Post Code', 'Post Code') !!}
    	{!! Form::text('Post Code', old('Post Code')) !!}
    	{!! $errors->first('Post Code', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	{!! Form::label('texture', 'How would you describe your hair texture?') !!}
    	{!! Form::select('texture', array(
    		'up to 4 GCSE' => 'Up to 4 GCSE\'s',
    		'4 or more GCSE' => '4 or more GCSE\'s',
    		'1 or more A level' => '1 or more A Level\'s',
    		'Other' => 'Other'
    		), old('texture'), ['placeholder' => '-- Please Select --']) !!}
    	{!! $errors->first('texture', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row">
    	{!! Form::label('condition', 'How would you describe your hair condition?') !!}
    	{!! Form::select('condition', array(
    		'up to 4 GCSE' => 'Up to 4 GCSE\'s',
    		'4 or more GCSE' => '4 or more GCSE\'s',
    		'1 or more A level' => '1 or more A Level\'s',
    		'Other' => 'Other'
    		), old('condition'), ['placeholder' => '-- Please Select --']) !!}
    	{!! $errors->first('condition', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row">
    	{!! Form::label('cut_spend', 'How much do you spend on average for a cut and blow?') !!}
    	{!! Form::select('cut_spend', array(
    		'up to 4 GCSE' => 'Up to 4 GCSE\'s',
    		'4 or more GCSE' => '4 or more GCSE\'s',
    		'1 or more A level' => '1 or more A Level\'s',
    		'Other' => 'Other'
    		), old('cut_spend'), ['placeholder' => '-- Please Select --']) !!}
    	{!! $errors->first('cut_spend', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row">
    	{!! Form::label('colour_spend', 'What is your average spend on colour services?') !!}
    	{!! Form::select('colour_spend', array(
    		'up to 4 GCSE' => 'Up to 4 GCSE\'s',
    		'4 or more GCSE' => '4 or more GCSE\'s',
    		'1 or more A level' => '1 or more A Level\'s',
    		'Other' => 'Other'
    		), old('colour_spend'), ['placeholder' => '-- Please Select --']) !!}
    	{!! $errors->first('colour_spend', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row">
        {!! Form::label('regular', 'Have you been to Jakata before?') !!}
        {!! Form::checkbox('regular') !!}
        {!! $errors->first('regular', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row buttons">
    	{!! Form::submit('Send') !!}
    </div>

</div>

{!! Form::close() !!}