@extends('app')
@section('content')
<a href="{{ URL::previous() }}" style="margin: 10px 10px 10px 10px;" class="btn btn-primary btn-md pull-right">BACK</a>
<h1>Stock </h1>
<div class="container">
<table class="table table-striped table-bordered table-hover">
<tbody>
<tr class="bg-info">
<tr>
<td>Customer name</td>
<td>{{ $stock->customer->name }}</td>
</tr>
<tr>
<td>Stock Symbol</td>
<td><?php echo ($stock['symbol']); ?></td>
</tr>
<tr>
<td>Stock Name</td>
<td><?php echo ($stock['share_name']); ?></td>
</tr>
<tr>
<td>Number of Shares</td>
<td><?php echo ($stock['shares']); ?></td>
</tr>
<tr>
<td>Purchase Price </td>
<td><?php echo ($stock['purchase_price']); ?></td>
</tr>
<tr>
<td>Date Purchased</td>
<td><?php echo ($stock['purchased']); ?></td>
</tr>
</tbody>
</table>
</div>
@stop

