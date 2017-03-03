{!! Form::open(array(
	'action' => 'SuperstylistController@store', 'id' => 'feedback-form'
)) !!}

<p class="note">Fields with <span class="required">*</span> are required.</p>

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

	
<div class="row question">
        <p>1. Customer care with <strong>own</strong> clients</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('client_care_own', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('client_care_own', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('client_care_own', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('client_care_own', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('client_care_own', '5') !!}
	{!! $errors->first('client_care_own', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>2. Customer care with <strong>other stylists</strong> clients</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('client_care_others', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('client_care_others', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('client_care_others', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('client_care_others', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('client_care_others', '5') !!}
	{!! $errors->first('client_care_others', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>3. Helping other staff members and availability to others <br><span class="small">not being in the back plus being positive towards helping others</span></p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('help_availability', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('help_availability', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('help_availability', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('help_availability', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('help_availability', '5') !!}
	{!! $errors->first('help_availability', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>4. Having a <strong>positive mental attitude</strong> all the time</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('pos_mentality', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('pos_mentality', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('pos_mentality', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('pos_mentality', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('pos_mentality', '5') !!}
	{!! $errors->first('pos_mentality', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>5. Being <strong>Pro-active</strong> and showing initiative</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('proactive', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('proactive', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('proactive', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('proactive', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('proactive', '5') !!}
	{!! $errors->first('proactive', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>6. Demonstrating <strong>passion</strong> for their job</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('passion', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('passion', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('passion', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('passion', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('passion', '5') !!}
	{!! $errors->first('passion', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>7. Quality of work carried out</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('work_quality', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('work_quality', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('work_quality', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('work_quality', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('work_quality', '5') !!}
	{!! $errors->first('work_quality', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>8. Take time to <strong>educate clients</strong> on aftercare, styling tips and products</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('educate_clients', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('educate_clients', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('educate_clients', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('educate_clients', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('educate_clients', '5') !!}
	{!! $errors->first('educate_clients', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>9. Conversation always <strong>focused on clients</strong> - and not themselves</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('convers_on_client', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('convers_on_client', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('convers_on_client', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('convers_on_client', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('convers_on_client', '5') !!}
	{!! $errors->first('convers_on_client', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        <p>10. Overall Super Stylist Rating</p>
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('overall_rating', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('overall_rating', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('overall_rating', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('overall_rating', '4') !!}
        <p class="scale_label">Super Stylist</p>
        {!! Form::radio('overall_rating', '5') !!}
	{!! $errors->first('overall_rating', '<div class="errorMessage">:message</div>') !!}
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