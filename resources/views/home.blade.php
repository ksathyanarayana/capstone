@extends('layouts.app')

<!DOCTYPE html>
<html>
    <head>
    
        <title >Eagle Financial Services</title>

       <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
       <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Arvo', 'Cabin';
                background-image:url('http://www.cfau-pd.net/images/background-images-for-websites/background-images-for-websites-13.jpg');
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 28px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div align="center"><H1><FONT SIZE="20" FACE="Arvo" COLOR=brown>EAGLE FINANCIAL SERVICES </FONT></H1></div>
                <div align="center"><h3><FONT style="font-style: italic;" FACE="Dancing+Script" COLOR=brown> Your success is our moto! </FONT></h3></div>
                <br>
                
 <div id="title">
    
    <div class="title">
        
                  <b> 
                <a  href="{{ action('CustomerController@index') }}">Customers</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="{{ action('StockController@index') }}">Stocks</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="{{ action('InvestmentController@index') }}">Investments</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="{{ action('FundController@index') }}">MutualFunds</a>
               

             </div>
</div>
<br>


<div class=""><img src="http://www.hd-wallpapersdownload.com/script/new-wallpaper/free-desktop-eagles-hd-photos-download.jpg" width="80%" height="500"></div>
                
            </div>
        </div>
    </body>
</html>

