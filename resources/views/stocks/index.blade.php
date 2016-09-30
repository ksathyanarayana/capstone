@extends('app')

@section('content')

    <h1>Stock</h1>
    <a href="{{url('/stocks/create')}}" class="btn btn-success">Create Stock</a>
    <a href="{{ URL::previous() }}" class="btn btn-success btn-md pull-right" >BACK</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Customer No</th>
            <th>Customer Name</th>
            <th>Stock Symbol</th>
            <th>Stock Name</th>
            <th>No of Shares</th>
            <th>Purchase price</th>
            <th>Purchase Date</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($stocks as $stock)
            <tr>
                <td>{{ $stock->customer->cust_number }}</td>
                <td>{{ $stock->customer->name }}</td>
                <td>{{ $stock->symbol }}</td>
                <td>{{ $stock->share_name }}</td>
                <td>{{ $stock->shares }}</td>
                <td>{{ $stock->purchase_price }}</td>
                <td>{{ $stock->purchased }}</td>
                <td><a href="{{url('stocks',$stock->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('stocks.edit',$stock->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['stocks.destroy', $stock->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection

