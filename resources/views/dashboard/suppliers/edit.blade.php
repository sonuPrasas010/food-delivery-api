@extends('dashboard.dashboard')

@section('content')
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Add Supplier</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span><i
                        class="mdi mdi-chevron-right"></i></span>Supplier</p>
        </div>
        <div><a href="product-list.html" class="btn btn-primary">View All</a></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Add Supplier</h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif

                    <div class="row ec-vendor-uploads">
                        <div class="col-lg-12">
                            <div class="ec-vendor-upload-detail">
                                <form class="row g-3" method="POST" action="{{ route('supplier.update',$vendor) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="col-md-6">
                                        <label for="vendor-name" class="form-label">Vendor name</label>
                                        <input name="vendor_name" value="{{ old('vendor_name') ?? $vendor->vendor_name }}"
                                            class="form-control border {{ $errors->has('vendor_name') ? 'is-invalid' : '' }}"
                                            id="vendor_name">
                                        @error('vendor_name')
                                            <span class="text-danger invalid-feedback mb-3">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Select Category</label>
                                        <select name="selected_category" id="Categories" class="form-select {{ $errors->has('selected_category') ?'is-invalid' : ''}}">
                                            <option value="bakery">Bakery</option>
                                            <option value="food">Food</option>
                                        </select>
                                        @error('selected_category')
                                            <div class="invalid-feedback mb-3"> {{$message}} </div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6">
                                        <label for="vendor_phone"  class="form-label">phone number</label>

                                        <input id="vendor_phone" name="vendor_phone" value="{{ old('vendor_phone') ?? $vendor->vendor_phone }}"
                                            class="form-control border {{ $errors->has('vendor_phone') ? 'is-invalid' : '' }}">
                                        @error('vendor_phone')
                                            <span class="invalid-feedback text-danger mb-3">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class=" form-label">email</label>
                                        <input id="email" name="vendor_email" value="{{ old('vendor_email') ?? $vendor->vendor_email }}"
                                            class="form-control border {{ $errors->has('vendor_email') ? 'is-invalid' : '' }}">
                                        @error('vendor_email')
                                            <span class="invalid-feedback mb-3">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-md-12">
                                        <label for="vendor_address" class="form-label">Address</label>
                                        <input id="vendor_address" name="vendor_address" value="{{ old('vendor_address') ?? $vendor->vendor_address }}"
                                            class="form-control border {{ $errors->has('vendor_address') ? 'is-invalid' : '' }}">
                                        @error('vendor_address')
                                            <span class="invalid-feedback mb-3">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Vendor Description</label>
                                        <textarea name="vendor_description" id="description"
                                            class="form-control {{ $errors->has('vendor_description') ? 'is-invalid' : '' }}" rows="2">{{old('vendor_description') ?? $vendor->vendor_description }}</textarea>
                                        @error('vendor_description')
                                            <span class="invalid-feedback mb-3">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="image">Image without Background</label>
                                        <input name="vendor_image" accept="image/*" type="file"
                                            class="form-control {{ $errors->has('vendor_image') ? 'is-invalid' : '' }}"
                                            id="vendor_image">
                                        @error('vendor_image')
                                            <span class="invalid-feedback mb-3">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label " for="vendor_image_bg">Image With Backgorund</label>

                                        <input accept="image/*" type="file"
                                            class="form-control {{ $errors->has('vendor_image_bg') ? 'is-invalid' : '' }}"
                                            name="vendor_image_bg" id="vendor_image_bg">

                                        @error('vendor_image_bg')
                                            <span class="invalid-feedback mb-3">{{ $message }}</span>
                                        @enderror
                                    </div>

                                   <div class="col-md-2 d-flex mt-3 mb-3">
                                    <label class="form-label" for="active">Active</label>
                                     <input type="radio" name="status" id="active" value="1" {{ $vendor->status? 'checked' : ''}} >
                                    <label class="form-label" for="inactive">Inactive</label>
                                    <input type="radio" name="status" id="inactive" value="0" {{ !$vendor->status? 'checked': "" }}>

                                   </div>


                                    <div class="col-md-12"><button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
