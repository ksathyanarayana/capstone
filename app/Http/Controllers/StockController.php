<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Stock;
use App\Customer;
use Auth;
use Session;

class StockController extends Controller
{
	public function index()
	{
		if(Auth::check()){
			$stocks=Stock::all();
			return view('stocks.index',compact('stocks'));}
			else{ 
				return redirect('/home');}
			}

			public function show($id)
			{
				if(Auth::check()){
					
					$stock = Stock::findOrFail($id);

					return view('stocks.show',compact('stock'));}
					else{ 
						return redirect('/home');}
					}


					public function create()
					{
						if(Auth::check()){
							$customers = Customer::pluck('name','id');
							return view('stocks.create', compact('customers'));}
							else{ 
								return redirect('/home');}
							}

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)   
    {
    	if(Auth::check()){

    		$stock= new Stock($request->all());
    		$stock->save();

    		return redirect('stocks');}
    		else{ 
    			return redirect('/home');}
    		}

    		public function edit($id)
    		{
    			if(Auth::check()){
    				$stock=Stock::find($id);
    				return view('stocks.edit',compact('stock'));}
    				else{ 
    					return redirect('/home');}
    				}

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
    	if(Auth::check()){
    		$stock= new Stock($request->all());
    		$stock=Stock::find($id);
    		$stock->update($request->all());
    		return redirect('stocks');}
    		else{ 
    			return redirect('/home');}
    		}

    		public function destroy($id)
    		{
    			if(Auth::check()){
    				Stock::find($id)->delete();
    				return redirect('stocks');}
    				else{ 
    					return redirect('/home');}
    				}
    			}
