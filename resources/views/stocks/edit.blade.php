@extends('app')
@section('content')
<a href="{{ URL::previous() }}" style="margin: 10px 10px 10px 10px;" class="btn btn-primary btn-md pull-right">BACK</a>
    <h1>Update Stock</h1>
    {!! Form::model($stock,['method' => 'PATCH','route'=>['stocks.update',$stock->id]]) !!}
       <div class="form-group">
        {!! Form::label('symbol', 'Symbol:') !!}
        {!! Form::text('symbol',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('share_name', 'Share Name:') !!}
        {!! Form::text('share_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('shares', 'No of Shares:') !!}
        {!! Form::text('shares',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_price', 'Purchase Price:') !!}
        {!! Form::text('purchase_price',null,['class'=>'form-control']) !!} 
		
		</div>
    <div class="form-group">
        {!! Form::label('purchased', 'Purchase Date:') !!}
        {!! Form::text('purchased',null,['class'=>'form-control']) !!} <!-- -->
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop

