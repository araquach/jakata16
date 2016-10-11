{!! Form::open(array(
	'action' => 'OfferController@update', 'id' => 'offer-form'
)) !!}

<div class="form">
    
    {!! Form::hidden('id') !!}
    
    <div class="row">
		{!! Form::label('opt_out', 'If you no longer wish to receive offers check the box then click \'Opt Out\'') !!}
		{!! Form::checkbox('opt_out', old('opt_out')) !!}
	</div>
	
	<div class="row buttons">
	{!! Form::submit('Opt Out') !!}
	</div>
    
    {!! Form::close() !!}
        
</div>

