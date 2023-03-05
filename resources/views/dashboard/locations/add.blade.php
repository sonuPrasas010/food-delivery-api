@extends('dashboard.dashboard')

@section('content')
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Add Delivery Location</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span><i
                        class="mdi mdi-chevron-right"></i></span>Delivery Location</p>
        </div>
        <div><a href="product-list.html" class="btn btn-primary">View All</a></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Add Delivery Location</h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif


                    <div class="ec-vendor-upload-detail">
                        <form class="row g-3" method="POST" action="{{ route('delivery-location.store') }}">
                            @csrf
                            <div class="col-md-12">
                                <label for="name" class="form-label">Location Name</label>
                                <input name="name" value="{{ old('name') }}"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name">
                                @error('name')
                                    <span class="text-danger invalid-feedback mb-3">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="cost" class="form-label">Delivery Cost</label>
                                <input type="number" id="cost" name="cost"
                                    value="{{ old('cost') }}"
                                    class="form-control {{ $errors->has('cost') ? 'is-invalid' : '' }}">
                                @error('cost')
                                    <span class="invalid-feedback mb-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3"><button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
