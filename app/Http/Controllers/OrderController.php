<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\FoodMainCategory;
use App\Models\FooodMainVendor;
use App\Models\ShippingPricing;
use App\Models\User;
use PhpParser\Node\Expr\FuncCall;

class OrderController extends Controller
{
    const ORDER_STATUS_CANCELLED =  "cancelled";
    const ORDER_STATUS_PENDING = 'pending';
    const ORDER_STATUS_VERIFIED = 'verified';
    const ORDER_STATUS_PROCESSING = 'processing';
    const ORDER_STATUS_DELIVERING = 'delivering';
    const ORDER_STATUS_DELIVERED = 'delivered';

    const PAYMENT_STATUS_UNPAID = "unpaid";
    const PAYMENT_STATUS_PAID = "paid";

    const PAYMENT_METHOD_CASH = 'cash';
    const PAYMENT_METHOD_ONLINE = 'online';
    const PAYMENT_METHOD_CARD = 'card';



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with("user")->get();
        return view('dashboard.orders.index',[
            'orders'=>$orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(int $order_id)
    {
        $order = Order::with('productOrders','user', 'vendor')->findOrFail($order_id);
        // dd($order);

        return view("dashboard.orders.show",[
            "order"=> $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function cancel(int $order_id){
        $order = Order::findOrFail($order_id);
        $order->order_status = self::ORDER_STATUS_CANCELLED;
        if( $order->update()){
            toast("Order cancelled","error");
            return redirect()->back();
        }
        toast("failed to cancel order","error");
        return redirect()->back();
    }

    public function invoice(int $order_id){
        $order = Order::with('productOrders','user', 'vendor')->findOrFail($order_id);
        // dd($order);

        return view("dashboard.orders.invoice",[
            "order"=> $order
        ]);
    }


}
