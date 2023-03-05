@extends('dashboard.dashboard')
@section('content')

    <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
        <h1>New Orders</h1>
        <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span><i
                    class="mdi mdi-chevron-right"></i></span>Orders</p>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Email</th>
                                    <th>Items</th>
                                    <th>Price</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->order_id}}</td>
                                    <td>{{ $order->user->firstName ." " . $order->user->last_name }}</td>
                                    <td>{{ $order->user->user_name}}</td>
                                    <td>{{ $order->id}}</td>
                                    <td>{{ $order->total }} </td>
                                    <td>{{ $order->payment_status}}</td>
                                    @if ($order->order_status == "pending")
                                    <td><span class="mb-2 mr-2 badge badge-secondary">{{ $order->order_status}}</span></td>
                                    @elseif ($order->order_status == 'verified')
                                    <td><span class="mb-2 mr-2 badge badge-info">{{ $order->order_status}}</span></td>
                                    @elseif ($order->order_status == 'processing')
                                    <td><span class="mb-2 mr-2 badge badge-info">{{ $order->order_status}}</span></td>
                                    @elseif ($order->order_status == 'shipping')
                                    <td><span class="mb-2 mr-2 badge badge-warning">{{ $order->order_status}}</span></td>
                                    @elseif ($order->order_status == 'delivered')
                                    <td><span class="mb-2 mr-2 badge badge-success">{{ $order->order_status}}</span></td>
                                    @else
                                    <td><span class="mb-2 mr-2 badge badge-danger">{{ $order->order_status}}</span></td>
                                    @endif


                                    <td>{{ $order->ordered_date }}</td>
                                    <td>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-outline-success">Info</button>
                                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                data-display="static">
                                                <span class="sr-only">Info</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('order.show',$order->order_id) }}">Detail</a>
                                                <a class="dropdown-item" href="{{ route('order.invoice',$order->order_id) }}">Invoice</a>
                                                <a class="dropdown-item" href="{{ route('order.cancel',$order->order_id) }}">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach













                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

