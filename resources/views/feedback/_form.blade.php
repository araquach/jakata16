{!! Form::open(array(
	'action' => 'FeedbackController@store', 'id' => 'feedback-form'
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

<div class="row">
        {{ Form::hidden('client_id', $client->id) }}
</div>
	
<div class="row question">
        {!! Form::label('intro', '1. How was the introduction to your stylist? Did they make you feel welcome and comfortable?') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('intro', '-2') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('intro', '-1') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('intro', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('intro', '1') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('intro', '2') !!}
		{!! $errors->first('intro', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('consultation', '2. Rate the consultation on these factors: Did the stylist listen to you?  Were they understanding?  Did they offer you professional advice and differering ideas? Did you feel comfortable with them?  Did you both come to a decision on what to go for?') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('consultation', '-2') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('consultation', '-1') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('consultation', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('consultation', '1') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('consultation', '2') !!}
		{!! $errors->first('consultation', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('styling_area', '3. How satisfied were you with the cleanliness of the styling station you were sat on. Use these factors to make your judgement:  Clean and clear from other peoples hair cuttings, clean shelving unit, clean mirrors, clear of clutter and tools, general cleanliness') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('styling_area', '-2') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('styling_area', '-1') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('styling_area', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('styling_area', '1') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('styling_area', '2') !!}
		{!! $errors->first('styling_area', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('stylist_appearance', '4. How do you rate your stylists appearance') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('stylist_appearance', '-2') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('stylist_appearance', '-1') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('stylist_appearance', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('stylist_appearance', '1') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('stylist_appearance', '2') !!}
		{!! $errors->first('stylist_appearance', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('prod_advice', '5. Rate the level of product advice given to you by your stylist.') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('prod_advice', '-2') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('prod_advice', '-1') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('prod_advice', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('prod_advice', '1') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('prod_advice', '2') !!}
		{!! $errors->first('prod_advice', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('styling_advice', '6. Rate the level of styling advice given to you by your stylist.') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('styling_advice', '-2') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('styling_advice', '-1') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('styling_advice', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('styling_advice', '1') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('styling_advice', '2') !!}
		{!! $errors->first('styling_advice', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question group">
        {!! Form::label('marketing', '7. We have 3 schemes in place to save you money on your visits to the salon. Which of these were you informed about?') !!}
                <div class="mktBox">
                {!! Form::label('mkt1', 'Recommend a friend') !!}
		{!! Form::checkbox('mkt1') !!}
		</div>
		<div class="mktBox">
		{!! Form::label('mkt2', 'Loyalty Points') !!}
		{!! Form::checkbox('mkt2') !!}
		</div>
		<div class="mktBox">
		{!! Form::label('mkt3', 'Pre-booking discount') !!}
		{!! Form::checkbox('mkt3') !!}
		</div>
</div>

<div class="row question">
        {!! Form::label('value_for_money', '8. How do you rate your stylists pricing and value for money?') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('value_for_money', '-2') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('value_for_money', '-1') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('value_for_money', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('value_for_money', '1') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('value_for_money', '2') !!}
		{!! $errors->first('value_for_money', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('whole_experience', '9. How do you rate the experience as a whole on your last visit?') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('whole_experience', '-2') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('whole_experience', '-1') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('whole_experience', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('whole_experience', '1') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('whole_experience', '2') !!}
		{!! $errors->first('', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('end_result', '10. How happy were you with the end result of your hair?') !!}
        <p class="scale_label">Very Poor</p>
        {!! Form::radio('end_result', '-4') !!}
        <p class="scale_label">Poor</p>
        {!! Form::radio('end_result', '-2') !!}
        <p class="scale_label">Average</p>
        {!! Form::radio('end_result', '0') !!}
        <p class="scale_label">Good</p>
        {!! Form::radio('end_result', '2') !!}
        <p class="scale_label">Excellent</p>
        {!! Form::radio('end_result', '4') !!}
		{!! $errors->first('', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('extra', 'Do you have any extra comments you would like to make?') !!}
        {!! Form::textArea('extra') !!}
		{!! $errors->first('extra', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row question">
        {!! Form::label('allow', 'Please tick the box if you allow us to use your feedback on our testimonials page') !!}
        {!! Form::checkbox('allow') !!}
		{!! $errors->first('allow', '<div class="errorMessage">:message</div>') !!}
</div>

<div class="row buttons">
	{!! Form::submit('Send') !!}
</div>


{!! Form::close() !!}
