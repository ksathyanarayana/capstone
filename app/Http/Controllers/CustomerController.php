<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;
use Auth;
use Session;

class CustomerController extends Controller
{
	public function index()
	{
		if(Auth::check()){
			$customers=Customer::all();
			return view('customers.index',compact('customers'));}
			else{ 
				return redirect('/home');
			}
		}

		public function show($id)
		{
			if(Auth::check()){
				$customer = Customer::findOrFail($id);
				return view('customers.show',compact('customer'));}
				else{ 
					return redirect('/home');}
				}


				public function create()
				{
					if(Auth::check()){

                        return view('customers.create');}
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

            $this->validate($request,[
                'name' => 'required|unique:customers,name',
                'cust_number' => 'required|numeric|unique:customers,cust_number',
                'zip' => 'required|numeric|digits:5',
                'email' => 'required|email|unique:customers,email',
                'home_phone' => 'numeric|digits:10|unique:customers,home_phone',
                'cell_phone' => 'required|numeric|digits:10|unique:customers,cell_phone',
            ]);

            $customer= new Customer($request->all());
    		$customer->save();
    		return redirect('customers');}
    		else{ 
    			return redirect('/home');}

    		}

    		public function edit($id)
    		{
    			if(Auth::check()){
    				$customer=Customer::find($id);
    				return view('customers.edit',compact('customer'));}
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

            $customer= new Customer($request->all());
    		$customer=Customer::find($id);
    		$customer->update($request->all());
    		return redirect('customers');}
    		else{ 
    			return redirect('/home');}
    		}

    		public function destroy($id)
    		{
    			if(Auth::check()){
    				Customer::find($id)->delete();
    				return redirect('customers');}
    				else{ 
    					return redirect('/home');}

    				}

    				public function stringify($id)
    				{
    					//if(Auth::check()){
                        //$customer = Customer::findOrFail($id);

    						$customer = Customer::where('cust_number', $id)->select('cust_number','name','address','city','state','zip','home_phone','cell_phone')->first();
                                $customer = $customer->toArray();
                                return response()->json($customer);
                                        
    						//else{ 
    							//return redirect('/home');}

    	

    					}
                    }
