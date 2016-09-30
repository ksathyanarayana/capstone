<br>
@extends('app')
@section('content')

<a href="{{ URL::previous()}}" style="margin: 10px 10px 10px 10px;" class="btn btn-primary btn-md pull-right">BACK</a>

 <h1>Create New Customer</h1>
{!! Form::open(['url' => 'customers']) !!}
<div class="form-group {{ $errors->has('name') ? ' has-error has-feedback' : '' }}">
{!! Form::label('name', 'Name:') !!}
{!! Form::text('name',null,['class'=>'form-control']) !!}
            @if ($errors->has('name'))
                <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
</div>
<div class="form-group {{ $errors->has('cust_number') ? ' has-error has-feedback' : '' }}">
{!! Form::label('cust_number', 'Customer ID:') !!}
{!! Form::text('cust_number',null,['class'=>'form-control']) !!}
 @if ($errors->has('cust_number'))
                <strong>{{ $errors->first('cust_number') }}</strong>
                </span>
            @endif
</div>
<div class="form-group {{ $errors->has('address') ? ' has-error has-feedback' : '' }}">
{!! Form::label('address', 'Street Address:') !!}
{!! Form::text('address',null,['class'=>'form-control']) !!}
@if ($errors->has('address'))
                <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
</div>
<div class="form-group {{ $errors->has('city') ? ' has-error has-feedback' : '' }}">
{!! Form::label('city', 'City:') !!}
{!! Form::text('city',null,['class'=>'form-control']) !!}
@if ($errors->has('city'))
                <strong>{{ $errors->first('city') }}</strong>
                </span>
            @endif
</div>
<div class="form-group {{ $errors->has('state') ? ' has-error has-feedback' : '' }}">
{!! Form::label('state', 'State:') !!}
{!! Form::text('state',null,['class'=>'form-control']) !!}
@if ($errors->has('state'))
                <strong>{{ $errors->first('state') }}</strong>
                </span>
            @endif
</div>
<div class="form-group {{ $errors->has('zip') ? ' has-error has-feedback' : '' }}">
{!! Form::label('zip', 'Zip:') !!}
{!! Form::text('zip',null,['class'=>'form-control']) !!}
@if ($errors->has('zip'))
                <strong>{{ $errors->first('zip') }}</strong>
                </span>
            @endif
</div>
<div class="form-group {{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
{!! Form::label('email', 'Primary Email:') !!}
{!! Form::text('email',null,['class'=>'form-control']) !!}
@if ($errors->has('email'))
                <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
</div>
<div class="form-group {{ $errors->has('home_phone') ? ' has-error has-feedback' : '' }}">
{!! Form::label('home_phone', 'Home Phone:') !!}
{!! Form::text('home_phone',null,['class'=>'form-control']) !!}
@if ($errors->has('home_phone'))
                <strong>{{ $errors->first('home_phone') }}</strong>
                </span>
            @endif
</div>
<div class="form-group {{ $errors->has('cell_phone') ? ' has-error has-feedback' : '' }}">
{!! Form::label('cell_phone', 'Cell Phone:') !!}
{!! Form::text('cell_phone',null,['class'=>'form-control']) !!}
@if ($errors->has('cell_phone'))
                <strong>{{ $errors->first('cell_phone') }}</strong>
                </span>
            @endif
</div>
<div class="form-group">
{!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>



{!! Form::close() !!}
@stop

