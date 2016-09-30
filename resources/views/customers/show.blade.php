@extends('app')
@section('content')
<a href="{{ URL::previous() }}" style="margin: 10px 10px 10px 10px;" class="btn btn-primary btn-md pull-right">BACK</a>
<h1>Customer </h1>

<div class="container">
<table class="table table-striped table-bordered table-hover">
<tbody>
<tr class="bg-info">
<tr>
<td>Customer Name</td>
<td><?php echo ($customer['name']); ?></td>
</tr>
<tr>
<td>Customer Number</td>
<td><?php echo ($customer['cust_number']); ?></td>
</tr>
<tr>
<td>Address</td>
<td><?php echo ($customer['address']); ?></td>
</tr>
<tr>
<td>City </td>
<td><?php echo ($customer['city']); ?></td>
</tr>
<tr>
<td>State</td>
<td><?php echo ($customer['state']); ?></td>
</tr>
<tr>
<td>Zip </td>
<td><?php echo ($customer['zip']); ?></td>
</tr>
<tr>
<td>Home Phone</td>
<td><?php echo ($customer['home_phone']); ?></td>
</tr>
<tr>
<td>Cell Phone</td>
<td><?php echo ($customer['cell_phone']); ?></td>
</tr>


</tbody>
</table>
</div>


<?php
$orgstkval=null;
$curtotstk = 0;
$curstkval=0;
$totstk = 0;
?>


<br>
<h2>Stocks </h2>
<div class="container">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th> Symbol </th>
<th>Stock Name</th>
<th>No. of Shares</th>
<th>Purchase Price</th>
<th>Purchase Date</th>
<th>Original Value</th>
<th>Current Price</th>
<th>Current Value</th>
</tr>
</thead>

<tbody>

@foreach($customer->stocks as $stock)
<tr>
<td>{{ $stock->symbol }}</td>
<td>{{ $stock->share_name }}</td>
<td>{{$stock->shares}}</td>
<td>{{$stock->purchase_price}}</td>
<td>{{$stock->purchased}}</td>
<td>
<?php

// To calculate the original Value
$orgstkval=$stock->purchase_price*$stock->shares;
echo $orgstkval;

//To calculate the total original value of stocks

$totstk=$totstk+$orgstkval;
?>
</td>
<?php
$URL="http://finance.google.com/finance/info?client=ig&q=" . $stock->symbol;
$file = fopen("$URL", "r");
$r = "";
do {
$data = fread($file, 500);
$r .= $data;
} while (strlen($data) != 0);

$json = str_replace("\n", "", $r);
$data = substr($json, 4, strlen($json) - 5);
$json_output = json_decode($data, true);
$curstkval = "\n" . $json_output['l'];
?>
<td><?php echo '$', $curstkval ?></td>
<td><?php echo $curstkval * $stock->shares; 

//Calculate total current value of  stocks
$curtotstk= $curtotstk + ($stock->shares * $curstkval) ?></td>



</tr>

@endforeach

</tbody>
</table>

<h4>Total of Initial Stock Portfolio : $<?php echo $totstk; ?> </h4>
<h4>Total of Current Stock Portfolio : $<?php echo $curtotstk; ?>  </h4>
</div>


<br>
<h2>Investments</h2>
<div class="container">

<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>Category</th>
<th>Description</th>
<th>Acquired Value</th>
<th>Acquired Date</th>
<th>Recent Value</th>
<th>Recent Date</th>
</tr>
</thead>

<tbody>
<?php $totiniinv=0;
$totcurinv=0;?>

@foreach($customer->investments as $investment)
<tr>

<td>{{$investment->category }}</td>
<td>{{$investment->description }}</td>
<td>{{$investment->acquired_value}}
<?php
$totiniinv=$totiniinv+$investment->acquired_value;
$totcurinv=$totcurinv+$investment->recent_value;
?></td>
<td>{{$investment->acquired_date}}</td>
<td>{{$investment->recent_value}}</td>
<td>{{$investment->recent_date}}</td>



</tr>

@endforeach

</tbody>
</table>

<h4>Total of Initial Investment Portfolio : $<?php echo $totiniinv; ?> </h4>
<h4>Total of Current Investment Portfolio : $<?php echo $totcurinv; ?>  </h4>

</div>

<br>
<h2>Mutual Funds</h2>
<div class="container">

<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>Fund Name</th>
<th>Fund Description</th>
<th>Acquired Value</th>
<th>Acquired Date</th>
<th>Recent Value</th>
<th>Recent Date</th>
</tr>
</thead>

<tbody>
<?php
$totinifun=0;
$totcurfun=0;
?>

@foreach($customer->funds as $fund)
<tr>
<td>{{$fund->fund_name }}</td>
<td>{{$fund->fund_description }}</td>
<td>{{$fund->acquired_value}}
<?php
$totinifun=$totinifun+$fund->acquired_value;
$totcurfun=$totcurfun+$fund->recent_value;
?></td>
<td>{{$fund->acquired_date}}</td>
<td>{{$fund->recent_value}}</td>
<td>{{$fund->recent_date}}</td>
</tr>

@endforeach

</tbody>
</table>
</div>
<h4>Total of Initial Mutual Funds Portfolio : $<?php echo $totinifun; ?> </h4>
<h4>Total of Current Mutual Funds Portfolio : $<?php echo $totcurfun; ?> </h4>

<br>
<h2>Summary Portfolio</h2>
<div class="container">
<table class="table table-striped table-bordered table-hover">

<tbody>
<tr class="bg-info">
<tr><td><h4>TOTAL INITIAL VALUE PORTFOLIO </h4></td>
<td><h4>$<?php echo $totstk+$totiniinv+$totinifun; ?></h4></td>
</tr>
<tr><td><h4>TOTAL CURRENT VALUE PORTFOLIO </h4></td>
<td><h4>$<?php echo $curtotstk+$totcurinv+$totcurfun; ?></h4> </td>
</tr>
</tr>
</thead>

</table>

</div>

@stop


