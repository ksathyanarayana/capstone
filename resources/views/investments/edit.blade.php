@extends('app')
@section('content')
<a href="{{ URL::previous() }}" style="margin: 10px 10px 10px 10px;" class="btn btn-primary btn-md pull-right">BACK</a>
<h1>Update Investment</h1>
{!! Form::model($investment,['method' => 'PATCH','route'=>['investments.update',$investment->id]]) !!}
<div class="form-group">
{!! Form::label('category', 'Category:') !!}
{!! Form::text('category',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('description', 'Description:') !!}
{!! Form::text('description',null,['class'=>'form-control']) !!}
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
{!! Form::label('recent_value', 'Recent Value:') !!}
{!! Form::text('recent_value',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('recent_date', 'Recent Date:') !!}
{!! Form::text('recent_date',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@stop