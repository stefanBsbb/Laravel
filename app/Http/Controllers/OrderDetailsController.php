<?php

namespace App\Http\Controllers;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $orderdetails = OrderDetail::all();

        return view('orderdetails.index',  compact('orderdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orderdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\OrderDetail::create([
          'order_id' => $request->get('order_id'),
          'product_id' => $request->get('product_id'),
          'Price' => $request->get('Price'),
          'Quantity'=> $request->get('Quantity'),
          'TotalPrice'=> $request->get('TotalPrice'),
        ]);

        return redirect('/orderdetails')->with('success', 'OrderDetail has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $orderdetail = OrderDetail::find($order_id);
        return view('orderdetails.getbyid', compact('orderdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $orderdetail = OrderDetail::find($id);

        return view('orderdetails.edit', compact('orderdetail'));
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
        $orderdetail = OrderDetail::find($id);
      $orderdetail->Price = $request->get('Price');
      $orderdetail->Quantity = $request->get('Quantity');
      $orderdetail->TotalPrice = $request->get('TotalPrice');

      $orderdetail->save();

      return redirect('/orderdetails')->with('success', 'OrderDetails has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderdetail = OrderDetail::find($id);
     $orderdetail->delete();

     return redirect('/orderdetails')->with('success', 'OrderDetails has been deleted Successfully');
    }
}
