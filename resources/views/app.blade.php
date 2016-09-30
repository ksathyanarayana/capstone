<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagle Financial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
<br>
<div class='container'>
<div class="btn-group btn-group-justified">
<!--<div class="jumbotron"> -->
    <a href="{{action('HomeController@index')}}" class="btn btn-primary">Home</a>
    <a href="{{ action('CustomerController@index') }}" class="btn btn-primary"> Customers</a>
    <a href="{{ action('StockController@index') }}" class="btn btn-primary">Stocks</a>
    <a href="{{ action('InvestmentController@index') }}" class="btn btn-primary">Investments</a>
    <a href="{{ action('FundController@index') }}" class="btn btn-primary">MutualFunds</a>
	</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
