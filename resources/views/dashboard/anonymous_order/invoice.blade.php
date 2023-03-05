@extends('dashboard.dashboard')
@section('content')
<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
    <h1>Invoice</h1>
    <p class="breadcrumbs">
        <span>
            <a href="index.html">Home</a>
        </span>
        <span>
            <i class="mdi mdi-chevron-right"></i>
        </span>Invoice
    </p>
</div>
<div class="card invoice-wrapper border-radius border bg-white p-4">
    <div class="d-flex justify-content-between">
        <h3 class="text-dark font-weight-medium">Order No #{{ $order->order_id }}</h3>
        <div class="btn-group"><button class="btn btn-sm btn-primary"><i class="mdi mdi-content-save"></i>
                Save</button> <button class="btn btn-sm btn-primary"><i class="mdi mdi-printer"></i> Print</button>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <p class="text-dark mb-2">From</p>
            <address>
                <span>{{ $order->name }}</span>
                <br>
                <span> {{ $order->locality }}</span> <b>{{  " (". $order->city .")"}} </b>
                <br>
                {{-- <span>Email:</span>
                {{ $order->user->user_name}}
                <br> --}}
                <span>Phone:</span> +977 {{ $order->mobile_number}}
            </address>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <p class="text-dark mb-2">To</p>
            <address>
                <span>{{ $order->vendor->vendor_name }}</span>
                <br>
               {{ $order->vendor->vendor_address}}
                <br>
                <span>Email</span>:
               {{ $order->vendor->vendor_email}}
                <br>
                <span>Phone:</span> {{ $order->vendor->vendor_phone }}
            </address>
        </div>
        <div class="col-xl-4 disp-none"></div>
        <div class="col-xl-2 col-lg-4 col-sm-6">
            <p class="text-dark mb-2">Details</p>
            <address><span>Invoice ID:</span>
                <span class="text-dark">#{{ $order->order_id }}</span>
                <br>
                <span>Date :</span> {{ $order->ordered_date }}
                {{-- <br> --}}
                {{-- <span>VAT:</span> PL6541215450</address> --}}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table mt-3 table-striped table-responsive table-responsive-large inv-tbl" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit_Cost</th>
                    <th>Discount</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->anonymousProductOrder as $product)


                <tr>
                    <td>{{ $product->food_id  }}</td>
                    <td><img class="invoice-item-img" src="{{ $product->image_url }}" alt="{{ $product->food->food_name }}"></td>
                    <td>{{ $product->food_name }}</td>
                    <td>{{ $product->food->short_desc }}</td>
                    <td>{{ $product->ordered_quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->discount_amount }}</td>
                    <td>{{ $product->total_amount }}</td>
                </tr>
                @endforeach

                <tr>
                    <td>*</td>
                    <td></td>
                    <td>Additional Discount</td>
                    <td colspan="4">{{ $order->additional_discount_reason }}</td>
                    <td>-{{ $order->additional_discount_amount }}</td>
                </tr>
                <tr>
                    <td>*</td>
                    <td></td>
                    <td>Additional Charge</td>
                    <td colspan="4">{{ $order->additional_charge_reason }}</td>
                    <td>-{{ $order->additional_charge_amount }}</td>
                </tr>
                {{-- <tr>
                    <td>3</td>
                    <td><img class="invoice-item-img" src="assets/img/products/p3.jpg" alt="product-image"></td>
                    <td>Full Sleeve T-Shirt for men</td>
                    <td>Amazing T-shirt in pure Cotton for both</td>
                    <td>10</td>
                    <td>$20.00</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img class="invoice-item-img" src="assets/img/products/p4.jpg" alt="product-image"></td>
                    <td>Round Hat for Men</td>
                    <td>Pure Leather Hat for men with black round tap</td>
                    <td>6</td>
                    <td>$50.00</td>
                    <td>$300.00</td>
                </tr> --}}
            </tbody>
        </table>
    </div>
    <div class="row justify-content-end inc-total">
        <div class="col-lg-3 col-xl-3 col-xl-3 ml-sm-auto">
            <ul class="list-unstyled mt-3">
                <li class="mid pb-3 text-dark">
                    Subtotal
                    <span class="d-inline-block float-right text-default">{{ $order->total - $order->discount_amount - $order->shipping_cost }}</span>
                </li>
                <li class="mid pb-3 text-dark">
                    Delivery Fee
                    <span class="d-inline-block float-right text-default">{{ $order->shipping_cost }}</span>
                </li>
                <li class="mid pb-3 text-dark">Discount
                    <span class="d-inline-block float-right text-default">{{ $order->discount_amount}}</span>
                </li>
                <li class="pb-3 text-dark">Total <span class="d-inline-block float-right">{{ $order->total }}</span>
                </li>
            </ul><a href="javascript:void(0)" class="btn btn-block mt-2 btn-primary btn-pill">Procced to Payment</a>
        </div>
    </div>
</div>

@endsection
