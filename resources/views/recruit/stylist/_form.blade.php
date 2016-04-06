{!! Form::open(array(
	'action' => 'StylistController@store', 'id' => 'stylist-form'
)) !!}

<div class="form">

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	

@if (count($errors) > 0)

<div id="stylist-form_es_" class="errorSummary">
		<p>Please fix the following input errors:</p>
		<ul>
	   		 @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    	@endforeach
		</ul>
</div>
   
@endif
	
<div class="accordion">
	
	<h2 class="reveal">1. Contact Information</h2>
	<div class="elements">

		{{ Form::hidden('id', '') }}
	
		{{ Form::hidden('date', '') }}

	<div class="row">
		{!! Form::label('first_name', 'First Name') !!}
		{!! Form::text('first_name') !!}
		{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('second_name', 'Second Name') !!}
		{!! Form::text('second_name') !!}
		{!! $errors->first('second_name', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('address1', 'Address 1') !!}
		{!! Form::text('address1') !!}
		{!! $errors->first('address1', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('address2', 'Address 2') !!}
		{!! Form::text('address2') !!}
		{!! $errors->first('address2', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">

		{!! Form::label('postcode', 'Postcode') !!}
		{!! Form::text('postcode') !!}
		{!! $errors->first('postcode', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('email', 'Email Address') !!}
		{!! Form::text('email') !!}
		{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('phone', 'Phone Number') !!}
		{!! Form::text('phone') !!}
		{!! $errors->first('phone', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('mobile', 'Mobile Number') !!}
		{!! Form::text('mobile') !!}
		{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}	
	</div>
	
	</div> <!--end elements (basic)-->
	
	<h2 class="reveal">2. Other Info</h2>
	<div class="elements">
	
	<div class="row">
		{!! Form::label('current_emp', 'What is your current employment status?') !!}
		{!! Form::select('current_emp', array(
			'In hair role' => 'In Hairdressing Role',
			'In non hair role' => 'In non-hairdressing role',
			'Unemployed' => 'Unemployed'
			), null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('current_emp', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('current_emp_des', 'If employed, please tell us where') !!}
		{!! Form::text('current_emp_des') !!}
		{!! $errors->first('current_emp_des', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('school_qual', 'What qualifications did you achieve at school?') !!}
		{!! Form::select('school_qual', array(
			'up to 4 GCSE' => 'Up to 4 GCSE\'s',
			'4 or more GCSE' => '4 or more GCSE\'s',
			'1 or more A level' => '1 or more A Level\'s',
			'Other' => 'Other'
			), null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('school_qual', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('qual_non_hair', 'Please state any non-hairdressing qualifications') !!}
		{!! Form::text('qual_non_hair') !!}
		{!! $errors->first('qual_non_hair', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('experience', 'How many years hairdressing experience do you have? (Since qualified)') !!}
		{!! Form::select('experience', array(
			'None' => 'None',
			'Up to 12 month' => 'Up to 12 momths',
			'1 to 2 years' => '1 to 2 years',
			'2 to 4 years' => '2 to 4 years',
			'4 to 8 years' => '4 to 8 years',
			'8 to 10 years' => '8 to 10 years',
			'10 years plus' => '10 plus years'
			), null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('experience', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('current_position', 'Which of these best describes your current level?') !!}
		{!! Form::select('current_position', array(
			'Junior' => 'Junior Stylist',
			'Graduate' => 'Graduate Stylist',
			'Stylist' => 'Stylist',
			'Senior' => 'Senior Stylist',
			'Director' => 'Director'
			), null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('current_position', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('client_base', 'Do you have an existing client base?') !!}
		{!! Form::select('client_base', array(
			'Local' => 'Yes - Local',
			'Other Area' => 'Yes - Other Area',
			'No' => 'No'
			), null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('client_base', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('qualifications', 'Do you have an existing client base?') !!}
		{!! Form::select('qualifications', array(
			'NVQ 1' => 'NVQ Level 1',
			'NVQ 2' => 'NVQ Level 2',
			'NVQ 3' => 'NVQ Level 3',
			'Other' => 'Other'
			), null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('qualifications', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('qual_non_hair', 'Any other Qualifications') !!}
		{!! Form::text('qual_non_hair') !!}
		{!! $errors->first('qual_non_hair', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div id="adex">
	<p class="application">Please check the box if you have experience in the following areas:</p>
	
	<div class="adexBox">
		{!! Form::label('adex_stock', 'Stock Control') !!}
		{!! Form::checkbox('adex_stock') !!}
		{!! $errors->first('adex_stock', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_manage', 'Management') !!}
		{!! Form::checkbox('adex_manage') !!}
		{!! $errors->first('adex_manage', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_train', 'Training') !!}
		{!! Form::checkbox('adex_train') !!}
		{!! $errors->first('adex_train', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_reception', 'Reception') !!}
		{!! Form::checkbox('adex_reception') !!}
		{!! $errors->first('adex_reception', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_marketing', 'Marketing') !!}
		{!! Form::checkbox('adex_marketing') !!}
		{!! $errors->first('adex_marketing', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_cservice', 'Customer Service') !!}
		{!! Form::checkbox('adex_cservice') !!}
		{!! $errors->first('adex_cservice', '<div class="errorMessage">:message</div>') !!}
	</div>
	</div> <!--end adex-->
		
	</div> <!--end elements (other info)-->
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate yourself from 1 (poor) to 5 (excellent) at the following:</p>

	<div class="row">
		{!! Form::label('cutting_skills', 'Cutting Skills') !!}
		{!! Form::selectRange('cutting_skills', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('cutting_skills', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('colour_knowledge', 'Colour Knowledge') !!}
		{!! Form::selectRange('colour_knowledge', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('colour_knowledge', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('colour_skills', 'Colouring Skills') !!}
		{!! Form::selectRange('colour_skills', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('colour_skills', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row">
		{!! Form::label('men', 'Mens Hairdressing') !!}
		{!! Form::selectRange('men', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('men', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('extensions_weave', 'Extensions (weave)') !!}
		{!! Form::selectRange('extensions_weave', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('extensions_weave', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('extensions_other', 'Extensions (other)') !!}
		{!! Form::selectRange('extensions_other', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('extensions_other', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('chem_straighten', 'Chemical Straightening') !!}
		{!! Form::selectRange('chem_straighten', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('chem_straighten', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('braz_blow', 'Brazilian Blowdry') !!}
		{!! Form::selectRange('braz_blow', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('braz_blow', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('hair_up', 'Hair Up') !!}
		{!! Form::selectRange('hair_up', 1, 5, null, ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('hair_up', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('awards', 'Please state any hairdressing awards') !!}
		{!! Form::text('awards') !!}
		{!! $errors->first('awards', '<div class="errorMessage">:message</div>') !!}
	</div>
	</div> <!--end hairdressing info-->
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	<div class="row">
		{!! Form::label('about_you', 'Tell us a bit about yourself') !!}
		{!! Form::textarea('about_you') !!}
		{!! $errors->first('about_you', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('why_hairdressing', 'Why did you choose to be a hairdresser?') !!}
		{!! Form::textarea('why_hairdressing') !!}
		{!! $errors->first('why_hairdressing', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row">
		{!! Form::label('why_jakata', 'Why do you want to join the Jakata Team?') !!}
		{!! Form::textarea('why_jakata') !!}
		{!! $errors->first('why_jakata', '<div class="errorMessage">:message</div>') !!}
	</div>

	<div class="row buttons">
	{!! Form::submit('Send') !!}
	</div>
	</div> <!--end element(hairdressing skills) -->
	
</div><!-- end accordion-->

</div><!-- form -->
{!! Form::close() !!}
