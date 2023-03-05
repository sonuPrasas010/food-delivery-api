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
                    <span>{{ $order->user->firstName . $order->user->last_name }}</span>
                    <br>
                    {{ $order->locality }}
                    <br>
                    <span>Email:</span>
                    {{ $order->user->user_name }}
                    <br>
                    <span>Phone:</span> +91 {{ $order->mobile_number }}
                </address>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <p class="text-dark mb-2">To</p>
                <address>
                    <span>{{ $order->vendor->vendor_name }}</span>
                    <br>
                    {{ $order->vendor->vendor_address }}
                    <br>
                    <span>Email</span>:
                    {{ $order->vendor->vendor_email }}
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
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->productOrders as $product)
                        <tr>
                            <td>{{ $product->food_id }}</td>
                            <td><img class="invoice-item-img" src="{{ $product->image_url }}"
                                    alt="{{ $product->food->food_name }}"></td>
                            <td>{{ $product->food_name }}</td>
                            <td>{{ $product->food->short_desc }}</td>
                            <td>{{ $product->ordered_quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->total_cost }}</td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                    <td>2</td>
                    <td><img class="invoice-item-img" src="assets/img/products/p2.jpg" alt="product-image"></td>
                    <td>Man T-Shirt with Cap Style</td>
                    <td>Long Sleeve men T-shirt with cap in Dark Blue Color</td>
                    <td>10</td>
                    <td>$50.00</td>
                    <td>$500.00</td>
                </tr>
                <tr>
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
                        <span
                            class="d-inline-block float-right text-default">{{ $order->total - $order->discount_amount }}</span>
                    </li>
                    <li class="mid pb-3 text-dark">
                        Delivery Fee
                        <span class="d-inline-block float-right text-default">{{ $order->shipping_cost }}</span>
                    </li>
                    <li class="mid pb-3 text-dark">Discount
                        <span class="d-inline-block float-right text-default">{{ $order->discount_amount }}</span>
                    </li>
                    <li class="pb-3 text-dark">Total <span class="d-inline-block float-right">{{ $order->total }}</span>
                    </li>
                </ul><a href="javascript:void(0)" class="btn btn-block mt-2 btn-primary btn-pill">Procced to Payment</a>
            </div>
        </div>
    </div>

    <div class="card mt-4 trk-order">
        <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span class="text-uppercase">Tracking Order No
                -</span> <span class="text-medium">34VB5540K83</span></div>
        <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Shipped Via:</span> UPS Ground</div>
            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Status:</span> {{ $order->order_status }}</div>
            {{-- <div class="w-100 text-center py-1 px-2"><span class="text-medium">Expected Date:</span> DEC 09, 2021</div> --}}
        </div>
        <div class="card-body">
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                <div class="step {{ $order->order_status == 'pending'|| $order->order_status=='cancelled' || $order->order_status == 'verified' || $order->order_status == 'processing' || $order->order_status == 'shipping' || $order->order_status == 'delivered'  ?'completed':'' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="mdi mdi-gift"></i></div>
                    </div>
                    <h4 class="step-title">Pending</h4>
                </div>
                <div class="step {{    $order->order_status == 'cancelled'  ?'completed':'' }}">
                    <div class="step-icon-wrap ">
                        <div class="step-icon"><i class="mdi mdi-cancel"></i></div>
                    </div>
                    <h4 class="step-title">Cancelled</h4>
                </div>
                <div class="step   {{ ($order->order_status != 'cancelled') && ( $order->order_status == 'verified' || $order->order_status == 'processing' || $order->order_status == 'shipping' || $order->order_status == 'delivered')  ?'completed':'' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="mdi mdi-cart"></i></div>
                    </div>
                    <h4 class="step-title">Verified Order</h4>
                </div>
                <div class="step {{ ($order->order_status != 'cancelled') && (  $order->order_status == 'processing' || $order->order_status == 'shipping' || $order->order_status == 'delivered')  ?'completed':'' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="mdi mdi-tumblr-reblog"></i></div>
                    </div>
                    <h4 class="step-title">Processing Order</h4>
                </div>
                <div class="step {{ ($order->order_status != 'cancelled') && (  $order->order_status == 'shipping' || $order->order_status == 'delivered')  ?'completed':'' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="mdi mdi-truck-delivery"></i></div>
                    </div>
                    <h4 class="step-title">Shipping</h4>
                </div>
                <div class="step {{ ($order->order_status != 'cancelled') && ( $order->order_status == 'delivered')  ?'completed':'' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="mdi mdi-hail"></i></div>
                    </div>
                    <h4 class="step-title">Product Delivered</h4>
                </div>

            </div>
        </div>
    </div>
@endsection
