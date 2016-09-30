<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Investment;
use App\Customer;
use Auth;
use Session;

class InvestmentController extends Controller
{
	public function index()
	{
		if(Auth::check()){
			$investments=Investment::all();
			return view('investments.index',compact('investments'));}
			else{ 
				return redirect('/home');}
			}

			public function show($id)
			{
				if(Auth::check()){
					$investment = Investment::findOrFail($id);

					return view('investments.show',compact('investment'));}
					else{ 
						return redirect('/home');}
					}


					public function create()
					{if(Auth::check()){
						$customers = Customer::pluck('name','id');
						return view('investments.create', compact('customers'));}
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
    		$investment= new Investment($request->all());
		//echo 'investments'.$investment;
    		$investment->save();

    		return redirect('investments');}
    		else{ 
    			return redirect('/home');}
    		}

    		public function edit($id)
    		{
    			if(Auth::check()){
    				$investment=Investment::find($id);
    				return view('investments.edit',compact('investment'));}
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
    		$investment= new Investment($request->all());
    		$investment=Investment::find($id);
    		$investment->update($request->all());
    		return redirect('investments');}
    		else{ 
    			return redirect('/home');}
    		}

    		public function destroy($id)
    		{
    			if(Auth::check()){
    				Investment::find($id)->delete();
    				return redirect('investments');}
    				else{ 
    					return redirect('/home');}
    				}
    			}
