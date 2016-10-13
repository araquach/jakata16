{!! Form::model($offer, [
'action' => ['OfferController@update', $offer->client_id],
'method' => 'PATCH',
'id' => 'offer-form'
]) !!}

<!--'method' => 'PATCH',-->

<div class="form">
    
    {!! Form::hidden('id') !!}
    
    <div class="row">
		{!! Form::label('opt_out', 'If you no longer wish to receive offers check the box then click \'Opt Out\'') !!}
		{!! Form::checkbox('opt_out') !!}
		{!! $errors->first('opt_out', '<div class="errorMessage">:message</div>') !!}
	</div>
	
	<div class="row buttons">
	{!! Form::submit('Opt Out') !!}
	</div>
    
    {!! Form::close() !!}
        
</div>

