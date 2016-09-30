@extends('app')
@section('content')

<div class="container">
        @if(Session::has("cust_delete_msg"))
            <div class="alert alert-danger" id="message">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Danger!</strong> {{Session::get("cust_delete_msg")}}
            </div>
        @endif

<h1>Customer</h1>
<a href="{{url('/customers/create')}}" class="btn btn-success" >Create Customer</a>
<a href="{{ URL::previous() }}" class="btn btn-success btn-md pull-right" >BACK</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th> Customer Number</th>
<th>Name</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Primary Email</th>
<th>Home Phone</th>
<th>Cell Phone</th>
<th colspan="3">Actions</th>
</tr>
</thead>
<tbody>
@foreach ($customers as $customer)
<tr>
<td>{{ $customer->cust_number }}</td>
<td>{{ $customer->name }}</td>
<td>{{ $customer->address }}</td>
<td>{{ $customer->city }}</td>
<td>{{ $customer->state }}</td>
<td>{{ $customer->zip }}</td>
<td>{{ $customer->email }}</td>
<td>{{ $customer->home_phone }}</td>
<td>{{ $customer->cell_phone }}</td>
<td><a href="{{url('customers',$customer->id)}}" class="btn btn-primary">Summary</a></td>
<td><a href="{{route('customers.edit',$customer->id)}}" class="btn btn-warning">Update</a></td>
<td>
{!! Form::open(['method' => 'DELETE', 'route'=>['customers.destroy', $customer->id]]) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</td>
</tr>
@endforeach

</tbody>

</table>
@endsection


