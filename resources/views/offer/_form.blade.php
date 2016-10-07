{!! Form::open(array(
	'action' => 'OfferController@store', 'id' => 'offer-form'
)) !!}

<div class="form">
    
    {!! Form::hidden('id') !!}
    
    <div class="row">
		{!! Form::label('opt_out', 'If you no longer wish to receive offers check the box then click \'GO\'') !!}
		{!! Form::checkbox('opt_out') !!}
	</div>
    
    {!! Form::close() !!}
        
</div>

