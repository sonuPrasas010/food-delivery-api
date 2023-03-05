<?php

namespace App\Http\Controllers;

use App\Models\ShippingPricing;
use App\Http\Requests\StoreShippingPricingRequest;
use App\Http\Requests\UpdateShippingPricingRequest;

class ShippingPricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveryLocations = ShippingPricing::all();
        return view("dashboard.locations.index",
    [
        "deliveryLocations"=>$deliveryLocations,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.locations.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShippingPricingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShippingPricingRequest $request)
    {

        $deliveryLocations = new ShippingPricing();
        $deliveryLocations->name = trim($request->name);
        $deliveryLocations->shipping_cost = $request->cost;
        $deliveryLocations->save();
        toast("$deliveryLocations->name added successfully","success");
        return redirect(route("delivery-location.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingPricing  $shippingPricing
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingPricing $shippingPricing)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingPricing  $shippingPricing
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
       $deliveryLocation = ShippingPricing::findOrFail($id);
       return view('dashboard.locations.edit',[
        "deliveryLocation" => $deliveryLocation,
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShippingPricingRequest  $request
     * @param  \App\Models\ShippingPricing  $shippingPricing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShippingPricingRequest $request, int $id)
    {
        $deliveryLocation = ShippingPricing::findOrFail($id);
        $deliveryLocation->name = trim($request->name);
        $deliveryLocation->shipping_cost = $request->cost;
        $deliveryLocation->update();
        toast("successfully updated $request->name","success");
        return redirect(route('delivery-location.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingPricing  $shippingPricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $shippingPricing = ShippingPricing::findOrFail($id);
        $shippingPricing->delete();
        toast("successfully deleted $shippingPricing->name","warning");
        return redirect()->back();
    }
}
