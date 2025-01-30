<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\orders;
use App\Models\product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = orders::all();
        return view('order.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = product::all();
        $customer = customers::all();
        return view('order.create',compact('product','customer'));
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
            'id_product'  => ['required'],
            'quantity'    => ['required'],
            'order_date'  => ['required'],
            'id_customer' => ['required'],
        ], [
            'id_product.required' => 'Product is required',
            'quantity.required'   => 'Quantity is required',
            'order_date.required' => 'Order date is required',
            'id_customer.required' => 'Customer is required',
        ]);

        $order = new orders();
        $order->id_product    = $request->id_product;
        $order->quantity      = $request->quantity;
        $order->order_date    = $request->order_date;
        $order->id_customer   = $request->id_customer;
        $order->save();

        return redirect()->route('order.index')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = orders::findOrFail($id);
        $id_customer = $order->id_customer;
        $id_product = $order->id_product;
        $customer = customers::findOrFail($id_customer);
        $product = product::findOrFail($id_product);
        return view('order.show', compact('order','customer','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = orders::findOrFail($id);
        $id_customer = $order->id_customer;
        $id_product = $order->id_product;
        $customer = customers::findOrFail($id_customer);
        $product = product::findOrFail($id_product);
        $allcustomer = customers::all();
        $allproduct = product::all();
        return view('order.edit', compact('order','customer','product','allcustomer','allproduct'));
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
        $order = orders::findOrFail($id);
        $order->id_product    = $request->id_product;
        $order->quantity            = $request->quantity;
        $order->order_date           = $request->order_date;
        $order->id_customer           = $request->id_customer;
        $order->save();

        return redirect()->route('order.index')->with('success','Data Berhasil Di Ganti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = orders::findOrFail($id);
        $order->delete();
        return redirect()->route('order.index')->with('success','Data Berhasil Di Hapus');
    }
}
