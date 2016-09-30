<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Fund;
use App\Customer;
use Auth;
use Session;

class FundController extends Controller
{
	public function index()
    {
        if(Auth::check()){
            $funds=Fund::all();
            return view('funds.index',compact('funds'));}
            else{ 
                return redirect('/home');}
            }

		public function show($id)
		{
			if(Auth::check()){
				$fund = Fund::findOrFail($id);

				return view('funds.show',compact('fund'));}
				else{ 
					return redirect('/home');
				}
			}


			public function create()
			{
				if(Auth::check()){
					$customers = Customer::pluck('name','id');
					return view('funds.create', compact('customers'));}
					else{ 
						return redirect('/home');
					}
				}

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
    	if(Auth::check()){
    		$fund= new Fund($request->all());
		//echo 'investments'.$investment;
    		$fund->save();

    		return redirect('funds');}
    		else{ 
    			return redirect('/home');
    		}
    	}

    	public function edit($id)
    	{
    		if(Auth::check()){
    			$fund=Fund::find($id);
    			return view('funds.edit',compact('fund'));}
    			else{ 
    				return redirect('/home');
    			}
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
    		$fund= new Fund($request->all());
    		$fund=Fund::find($id);
    		$fund->update($request->all());
    		return redirect('funds');}
    		else{ 
    			return redirect('/home');
    		}
    	}

    	public function destroy($id)
    	{
    		if(Auth::check()){
    			Fund::find($id)->delete();
    			return redirect('funds');}
    			else{ 
    				return redirect('/home');
    			}
    		}
    	}
