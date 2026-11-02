<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datacustomers = Customers::all();
        return view('customers.index',compact('datacustomers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'customers_name' => 'required|string|max:100',
        'email'          => 'nullable',
        'phone'          => 'required',
        'address'        => 'required',
        'member_status'  => 'required'
    ]);

    Customers::create([
        'customers_name' => $request->customers_name,
        'email'          => $request->email,
        'phone'          => $request->phone,
        'address'        => $request->address,
        'member_status'  => $request->member_status
    ]);
         
    return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataeditcustomers = Customers::find($id);
        return view('customers.edit',compact('dataeditcustomers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'customers_name' => 'required|string|max:100',
        'email'          => 'nullable|email',
        'phone'          => 'required',
        'address'        => 'required',
        'member_status'  => 'required'
    ]);
        $updatedatacustomer = Customers::findOrFail($id);
        $updatedatacustomer->update([
        'customers_name' => $request->customers_name,
        'email'          => $request->email,
        'phone'          => $request->phone,
        'address'        => $request->address,
        'member_status'  => $request->member_status
    ]);
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customers::where('customers_id',$id)->delete();
        return redirect()->route('customers.index');
    }
}
