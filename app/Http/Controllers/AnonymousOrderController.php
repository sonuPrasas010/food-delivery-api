<?php

namespace App\Http\Controllers;

use App\Models\AnonymousOrder;
use App\Http\Requests\StoreAnonymousOrderRequest;
use App\Http\Requests\UpdateAnonymousOrderRequest;
use App\Models\AnonymousProductOrder;
use App\Models\Food;
use App\Models\FoodMainCategory;
use App\Models\FooodMainVendor;
use App\Models\ShippingPricing;

class AnonymousOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = AnonymousOrder::where("order_status", "!=", OrderController::ORDER_STATUS_CANCELLED)
                        ->where("order_status", "!=", OrderController::ORDER_STATUS_DELIVERED)
                            ->orderBy("id", "DESC")
                            ->get();


        $locations = ShippingPricing::all();
        $vendors = FooodMainVendor::all();
        $paymentStatuses = [
            OrderController::PAYMENT_STATUS_UNPAID,
            OrderController::PAYMENT_STATUS_UNPAID
         ];
         $paymentMethods = [
            OrderController::PAYMENT_METHOD_CARD,
            OrderController::PAYMENT_METHOD_CASH,
            OrderController::PAYMENT_METHOD_ONLINE,
         ];

         $orderStatuses = [
            OrderController::ORDER_STATUS_CANCELLED,
            OrderController::ORDER_STATUS_DELIVERED,
            OrderController::ORDER_STATUS_DELIVERING,
            OrderController::ORDER_STATUS_PENDING,
            OrderController::ORDER_STATUS_PROCESSING,
            OrderController::ORDER_STATUS_VERIFIED,
         ];

        return view('dashboard.anonymous_order.index', [
            'orders' => $orders,
            "locations" =>$locations,
            'vendors' => $vendors,
            'payments' => $paymentStatuses,
            "paymentMethods" => $paymentMethods,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $vendors = FooodMainVendor::all();
        $categories  = FoodMainCategory::all();
        $locations = ShippingPricing::all();
        return view('dashboard.anonymous_order.add', [
            'vendors' => $vendors,
            'categories' => $categories,
            'locations' => $locations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnonymousOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnonymousOrderRequest $request)
    {
        // return $request;
        $order = new AnonymousOrder();
        $location = ShippingPricing::where("name",$request->location)->first();
        $vendor = FooodMainVendor::findOrFail($request->vendor);
        $foods = Food::whereIn("food_id", $request->food_id)->get();


        $order->locality = $request->address;
        $order->city = $location->name;
        $order->shipping_cost = $location->shipping_cost;
        $order->shipping_pricing_id = $location->shipping_pricing_id;

        $order->name = $request->name;
        $order->mobile_number = $request->phone;
        $order->driver_number = $request->driver_number;
        $order->vendor_id = $request->vendor;

        // return $foods;
        $total = 0;
        $totalDiscount = 0;
        for ($i=0; $i < count($request->food_id); $i++)
        {
            foreach($foods as $food)
            {
                if($request->food_id[$i] == $food->food_id)
                {
                    $currentTotalPrice = $food->price *  $request->items[$i];
                    $currentDiscount =  $currentTotalPrice * $food->discount / 100;
                    $totalDiscount = $totalDiscount + $currentDiscount;
                    $total = $total+ $currentTotalPrice - $currentDiscount;

                }
            }
        }

       $totalDiscount = ($totalDiscount + $request->additional_discount_amount);
       $total = $total + $request->additional_charge_amount + $location->shipping_cost;
       $total = $total- $totalDiscount;
    //    return $totalDiscount ." ". $total . " " . $location->shipping_cost;


        $order->discount_amount =(int) $totalDiscount;
        $order->total = (int) $total;
        $order->additional_discount_amount = $request->additional_discount_amount ?? 0;
        $order->additional_discount_reason = $request->additional_discount_reason;
        $order->additional_charge_amount = $request->additional_charge_amount ?? 0;
        $order->additional_charge_reason =$request->additional_charge_reason;

        $order->order_status = OrderController::ORDER_STATUS_PENDING;
        $order->payment_status = OrderController::PAYMENT_STATUS_UNPAID;
        $order->payment_method = OrderController::PAYMENT_METHOD_CASH;
        $order->save();


        for ($index=0; $index < count($request->food_id); $index++) {
           foreach ($foods as $food) {
                if($food->food_id == $request->food_id[$index])
                {
                    $anonymousProductOrder = new AnonymousProductOrder();
                    $price = $food->price;
                    $discount = ($food->discount /100  * $request->items[$index] * $price);
                    $totalAmount = (($price * $request->items[$index]) - $discount);
                    $anonymousProductOrder->food_id = $food->food_id;
                    $anonymousProductOrder->food_name = $food->food_name;
                    $anonymousProductOrder->image_url = $food->image_url;
                    $anonymousProductOrder->small_image_url = $food->small_image_url;
                    $anonymousProductOrder->ordered_quantity = $request->items[$index];
                    $anonymousProductOrder->price =(int) $price;
                    $anonymousProductOrder->discount_amount = (int) $discount;
                    $anonymousProductOrder->total_amount =(int) ($totalAmount);

                    $anonymousProductOrder->anonymous_order_id = $order->id;
                    $anonymousProductOrder->save();


                }
           }
        }





        toast("order created successfully","success")->timerProgressBar();
        return redirect( route('anonymous-order.index') );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnonymousOrder  $anonymousOrder
     * @return \Illuminate\Http\Response
     */
    public function show(int $anonymous_order_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnonymousOrder  $anonymousOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(AnonymousOrder $anonymousOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnonymousOrderRequest  $request
     * @param  \App\Models\AnonymousOrder  $anonymousOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnonymousOrderRequest $request, AnonymousOrder $anonymousOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnonymousOrder  $anonymousOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnonymousOrder $anonymousOrder)
    {
        //
    }

    public function cancel(int $anonymous_order_id){
        $order = AnonymousOrder::findOrFail($anonymous_order_id);
        $order->order_status = OrderController::ORDER_STATUS_CANCELLED;
        if( $order->update()){
            toast("Order cancelled","error");
            return redirect()->back();
        }
        toast("failed to cancel order","error");
        return redirect()->back();
    }

    public function invoice(int $order_id){
        $order = AnonymousOrder::with('anonymousProductOrder', 'vendor')->findOrFail($order_id);
        // dd($order);

        return view("dashboard.anonymous_order.invoice",[
            "order"=> $order
        ]);
    }
}
