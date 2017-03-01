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
        
{{ Form::hidden('user_id', Auth::user()->id) }}

{{ Form::hidden('salon_id', 'Auth::user()->salon_id') }}
	
<div class="row question">
        {!! Form::label('client_care_own', '1. Client care own') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('client_care_own', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('client_care_own', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('client_care_own', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('client_care_own', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('client_care_own', '5') !!}
	{!! $errors->first('client_care_own', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('client_care', '2. Client care others') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('client_care_others', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('client_care_others', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('client_care_others', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('client_care_others', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('client_care_others', '5') !!}
	{!! $errors->first('client_care_others', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('help_availability', '3. Help and availability') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('help_availability', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('help_availability', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('help_availability', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('help_availability', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('help_availability', '5') !!}
	{!! $errors->first('help_availability', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('pos_mentality', '4. Positive mental attitude') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('pos_mentality', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('pos_mentality', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('pos_mentality', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('pos_mentality', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('pos_mentality', '5') !!}
	{!! $errors->first('pos_mentality', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('proactive', '5. Pro-active') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('proactive', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('proactive', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('proactive', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('proactive', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('proactive', '5') !!}
	{!! $errors->first('proactive', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('passion', '6. Passion') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('passion', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('passion', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('passion', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('passion', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('passion', '5') !!}
	{!! $errors->first('passion', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('work_quality', '7. Quality of work') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('work_quality', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('work_quality', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('work_quality', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('work_quality', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('work_quality', '5') !!}
	{!! $errors->first('work_quality', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('educate_clients', '8. Educate clients') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('educate_clients', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('educate_clients', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('educate_clients', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('educate_clients', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('educate_clients', '5') !!}
	{!! $errors->first('educate_clients', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('convers_on_client', '9. Conversation focused on client') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('convers_on_client', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('convers_on_client', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('convers_on_client', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('convers_on_client', '4') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('convers_on_client', '5') !!}
	{!! $errors->first('convers_on_client', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('overall_rating', '10. Overall Super Stylist Rating') !!}
        
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('overall_rating', '1') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('overall_rating', '2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('overall_rating', '3') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('overall_rating', '4') !!}
        <p class="scale_label">Excellent</p>
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