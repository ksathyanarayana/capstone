@extends('app')
@section('content')
<a href="{{ URL::previous() }}" style="margin: 10px 10px 10px 10px;" class="btn btn-primary btn-md pull-right">BACK</a>
<h1>Create New Fund</h1>
{!! Form::open(['url' => 'funds']) !!}

<div class="form-group">
  {!! Form::select('customer_id', $customers) !!}
</div>

<div class="form-group">
    {!! Form::label('fund_name', 'Fund Name:') !!}
    {!! Form::text('fund_name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fund_description', 'Fund Description:') !!}
    {!! Form::text('fund_description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('acquired_value', 'Acquired Value:') !!}
    {!! Form::text('acquired_value',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('acquired_date', 'Acquired Date:') !!}
    {!! Form::text('acquired_date',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('recent_value', 'Current Value:') !!}
    {!! Form::text('recent_value',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('recent_date', 'Recent Date:') !!}
    {!! Form::text('recent_date',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
@stop
