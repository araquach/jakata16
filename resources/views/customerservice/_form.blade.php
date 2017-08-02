{!! Form::open(array(
	'action' => 'CustomerServiceController@store', 'id' => 'feedback-form'
)) !!}

@if (count($errors) > 0)

<div id="feedback-form_es_" class="errorSummary">
		<p>Please fix the following input errors:</p>
		<ul>
	   		 @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    	@endforeach
		</ul>
</div>
   
@endif
        
{{ Form::hidden('user_id', $user->id) }}

{{ Form::hidden('voter_id', Auth::id()) }}

{{ Form::hidden('salon_id', $user->salon_id) }}

	
<div class="row">
        {!! Form::label('client_name', 'Client Name') !!}
        {!! Form::text('client_name') !!}
	{!! $errors->first('client_name', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>1. Meet and Greet</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('meet_greet', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('meet_greet', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('meet_greet', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('meet_greet', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('meet_greet', '5') !!}
	{!! $errors->first('meet_greet', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>2. Consultation</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('consultation', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('consultation', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('consultation', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('consultation', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('consultation', '5') !!}
	{!! $errors->first('consultation', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>3. Main Service</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('main_service', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('main_service', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('main_service', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('main_service', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('main_service', '5') !!}
	{!! $errors->first('main_service', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>4. Retail</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('retail', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('retail', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('retail', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('retail', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('retail', '5') !!}
	{!! $errors->first('retail', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>5. Cleanliness</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('cleanliness', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('cleanliness', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('cleanliness', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('cleanliness', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('cleanliness', '5') !!}
	{!! $errors->first('cleanliness', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>6. Educating client</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('education', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('education', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('education', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('education', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('education', '5') !!}
	{!! $errors->first('education', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>7. Closing the sale
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('closing_sale', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('closing_sale', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('closing_sale', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('closing_sale', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('closing_sale', '5') !!}
	{!! $errors->first('closing_sale', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('extra', 'Do you have any extra comments you would like to make?') !!}
        {!! Form::textArea('extra') !!}
	{!! $errors->first('extra', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row buttons">
	{!! Form::submit('Submit') !!}
</div>


{!! Form::close() !!}