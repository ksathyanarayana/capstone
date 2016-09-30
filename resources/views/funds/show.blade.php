@extends('app')
@section('content')
<a href="{{ URL::previous() }}" style="margin: 10px 10px 10px 10px;" class="btn btn-primary btn-md pull-right">BACK</a>
<h1>Fund</h1>
<br>

<div class="container">
<table class="table table-striped table-bordered table-hover">


<tbody>
<tr class="bg-info">
<tr>
<td>Customer name</td>
<td>{{ $fund->customer->name }}</td>
</tr>
<tr>
<td>Fund Name</td>
<td><?php echo ($fund['fund_name']); ?></td>
</tr>

<tr>
<td>Fund Description</td>
<td><?php echo ($fund['fund_description']); ?></td>
</tr>
<tr>
<td>Acquired Value</td>
<td><?php echo ($fund['acquired_value']); ?></td>
</tr>
<tr>
<td>Acquired Date </td>
<td><?php echo ($fund['acquired_date']); ?></td>
</tr>
<tr>
<td>Recent Value</td>
<td><?php echo ($fund['recent_value']); ?></td>
</tr>
<tr>
<td>Recent Date </td>
<td><?php echo ($fund['recent_date']); ?></td>
</tr>
</tbody>
</table>
</div>

@stop
