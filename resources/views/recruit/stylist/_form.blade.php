<div class="form">

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    @endforeach
	</ul>

<div class="accordion">
	
	<h2 class="reveal">1. Contact Information</h2>
	<div class="elements">

	<div class="row">
		hidden field date
	</div>

	<div class="row">
		{!! Form::label('first_name', 'First Name') !!}
		{!! Form::text('first_name') !!}
		{!! $errors->first('first_name') !!}
	</div>
	
	<div class="row">
		{!! Form::label('second_name', 'Second Name') !!}
		{!! Form::text('second_name') !!}
		{!! $errors->first('second_name') !!}
	</div>

	<div class="row">
		{!! Form::label('address1', 'Address 1') !!}
		{!! Form::text('address1') !!}
		{!! $errors->first('address1') !!}
	</div>
	
	<div class="row">
		{!! Form::label('address2', 'Address 2') !!}
		{!! Form::text('address 2') !!}
		{!! $errors->first('address2') !!}
	</div>
	
	<div class="row">
		{!! Form::label('address3', 'Address 3') !!}
		{!! Form::text('address3') !!}
		{!! $errors->first('address3') !!}
	</div>
	
	<div class="row">
		{!! Form::label('postcode', 'Postcode') !!}
		{!! Form::text('postcode') !!}
		{!! $errors->first('postcode') !!}
	</div>
	
	<div class="row">
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email') !!}
		{!! $errors->first('email') !!}
	</div>
	
	<div class="row">
		{!! Form::label('phone', 'Phone') !!}
		{!! Form::text('phone') !!}
		{!! $errors->first('phone') !!}
	</div>
	
	<div class="row">
		{!! Form::label('mobile', 'Mobile') !!}
		{!! Form::text('mobile') !!}
		{!! $errors->first('mobile') !!}	
	</div>
	
	</div> <!--end elements (basic)-->
	
	<h2 class="reveal">2. Other Info</h2>
	<div class="elements">
	
	<div class="row">
		{!! Form::label('current_emp', 'Current Employment') !!}
		{!! Form::select('current_emp') !!}
		{!! $errors->first('current_emp') !!}
	</div>
	
	<div class="row">
		{!! Form::label('current_emp_des', 'Current Employment Description') !!}
		{!! Form::select('current_emp_des') !!}
		{!! $errors->first('current_emp_des') !!}
	</div>
	
	<div class="row">
		{!! Form::label('school_qual', 'School Qualifications') !!}
		{!! Form::select('school_qual') !!}
		{!! $errors->first('school_qual') !!}
	</div>
	
	<div class="row">
		{!! Form::label('qual_non_hair', 'Any other Qualifications') !!}
		{!! Form::text('qual_non_hair') !!}
		{!! $errors->first('qual_non_hair') !!}
	</div>
	
	<div class="row">
		{!! Form::label('experience', 'Experience') !!}
		{!! Form::select('experience') !!}
		{!! $errors->first('experience') !!}
	</div>	
	
	<div class="row">
		{!! Form::label('current_position', 'Current Position') !!}
		{!! Form::select('current_position') !!}
		{!! $errors->first('current_position') !!}
	</div>	
	
	<div class="row">
		{!! Form::label('client_base', 'Client Base') !!}
		{!! Form::select('client_base') !!}
		{!! $errors->first('client_base') !!}
	</div>	
	
	<div class="row">
		{!! Form::label('qualifications', 'Qualifications') !!}
		{!! Form::select('qualifications') !!}
		{!! $errors->first('qualifications') !!}
	</div>
	
	<div id="adex">
	<p class="application">Please check the box if you have experience in the following areas:</p>
	
	<div class="adexBox">
		{!! Form::label('adex_stock', 'Stock Control') !!}
		{!! Form::checkbox('adex_stock') !!}
		{!! $errors->first('adex_stock') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_manage', 'Management') !!}
		{!! Form::checkbox('adex_manage') !!}
		{!! $errors->first('adex_manage') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_train', 'Training') !!}
		{!! Form::checkbox('adex_train') !!}
		{!! $errors->first('adex_train') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_reception', 'Reception') !!}
		{!! Form::checkbox('adex_reception') !!}
		{!! $errors->first('adex_reception') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_marketing', 'Marketing') !!}
		{!! Form::checkbox('adex_marketing') !!}
		{!! $errors->first('adex_marketing') !!}
	</div>
	
	<div class="adexBox">
		{!! Form::label('adex_cservice', 'Customer Service') !!}
		{!! Form::checkbox('adex_cservice') !!}
		{!! $errors->first('adex_cservice') !!}
	</div>
	</div> <!--end adex-->
		
	</div> <!--end elements (other info)-->
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate yourself from 1 (poor) to 5 (excellent) at the following:</p>

	<div class="row">
		{!! Form::label('cutting_skills', 'Cutting Skills') !!}
		{!! Form::select('cutting_skills') !!}
		{!! $errors->first('cutting_skills') !!}
	</div>

	<div class="row">
		{!! Form::label('colour_knowledge', 'Colour Knowledge') !!}
		{!! Form::select('colour_knowledge') !!}
		{!! $errors->first('colour_knowledge') !!}
	</div>

	<div class="row">
		{!! Form::label('colour_skills', 'Colouring Skills') !!}
		{!! Form::select('colour_skills') !!}
		{!! $errors->first('colour_skills') !!}
	</div>
	
	<div class="row">
		{!! Form::label('men', 'Mens Hairdressing') !!}
		{!! Form::select('men') !!}
		{!! $errors->first('men') !!}
	</div>

	<div class="row">
		{!! Form::label('extensions_weave', 'Extensions (weave)') !!}
		{!! Form::select('extensions_weave') !!}
		{!! $errors->first('extensions_weave') !!}
	</div>

	<div class="row">
		{!! Form::label('extensions_other', 'Extensions (other)') !!}
		{!! Form::select('extensions_other') !!}
		{!! $errors->first('extensions_other') !!}
	</div>

	<div class="row">
		{!! Form::label('chem_straighten', 'Chemical Straightening') !!}
		{!! Form::select('chem_straighten') !!}
		{!! $errors->first('chem_straighten') !!}
	</div>

	<div class="row">
		{!! Form::label('braz_blow', 'Brazilian Blowdry') !!}
		{!! Form::select('braz_blow') !!}
		{!! $errors->first('braz_blow') !!}
	</div>

	<div class="row">
		{!! Form::label('hair_up', 'Hair Up') !!}
		{!! Form::select('hair_up') !!}
		{!! $errors->first('hair_up') !!}
	</div>

	<div class="row">
		{!! Form::label('awards', 'Hairdressing Awards') !!}
		{!! Form::text('awards') !!}
		{!! $errors->first('awards') !!}
	</div>
	</div> <!--end hairdressing info-->
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	<div class="row">
		{!! Form::label('about_you', 'About You') !!}
		{!! Form::textarea('about_you') !!}
		{!! $errors->first('about_you') !!}
	</div>

	<div class="row">
		{!! Form::label('why_hairdressing', 'Why Hairdressing?') !!}
		{!! Form::textarea('why_hairdressing') !!}
		{!! $errors->first('why_hairdressing') !!}
	</div>

	<div class="row">
		{!! Form::label('why_jakata', 'Why Jakata?') !!}
		{!! Form::textarea('why_jakata') !!}
		{!! $errors->first('why_jakata') !!}
	</div>

	<div class="row buttons">
	{!! Form::submit('Send') !!}
	</div>
	</div> <!--end element(hairdressing skills) -->
	
</div><!-- end accordion-->

</div><!-- form -->