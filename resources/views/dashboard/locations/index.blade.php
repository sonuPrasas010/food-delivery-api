@extends('dashboard.dashboard')
@section('content')
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
            <h1>Delivery Locations</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                 <span> <i class="mdi mdi-chevron-right"></i></span>Delivery Locations
            </p>
        </div>
        <div class="text-right mb-3">
            <button type="button" class="btn btn-primary text-right" onclick="window.location = '{{route('delivery-location.create')}}'">
                Add Location
            </button>
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
                                        {{-- <th>Customer</th> --}}
                                        {{-- <th>Email</th> --}}
                                        <th>Locations</th>
                                        <th>Price</th>
                                        <th>Total order</th>
                                        {{-- <th>Status</th> --}}
                                        {{-- <th>Date</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deliveryLocations as $deliveryLocation)
                                    <tr>
                                        <td>{{$deliveryLocation->shipping_pricing_id }}</td>
                                        {{-- <td>Johny Markue</td>
                                        <td>johny@example.com</td> --}}
                                        <td>{{ $deliveryLocation->name }}</td>
                                        <td>{{ $deliveryLocation->shipping_cost }}</td>
                                        <td>10</td>
                                        {{-- <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span></td> --}}
                                        {{-- <td>2021-10-30</td> --}}
                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button" class="btn btn-outline-success">Info</button>
                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('delivery-location.edit',$deliveryLocation) }}">Edit</a>
                                                    <form action="{{ route('delivery-location.destroy',$deliveryLocation) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                    </form>
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
