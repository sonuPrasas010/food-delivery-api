@extends('dashboard.dashboard')
@section('content')
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Add Product</h1>
        <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span><i
                    class="mdi mdi-chevron-right"></i></span>Order</p>
    </div>
    <div><a href="product-list.html" class="btn btn-primary">View All</a></div>
</div>
<script>
    // function formSubmit(event,element){
    //     alert();
    //     event.preventDefault();
    //     // $(element).submit();
    //     let formData = $('form').serialize();
    //     console.log(formData);
    // }
</script>
<form onsubmit="formSubmit(event,this)" action = "{{ route('anonymous-order.store') }}" method=  "POST" >
    @csrf

    @if ($errors->any())

                    {{!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}}
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Add Order</h2>
                </div>
                <div class="card-body">

                    <div class="row ec-vendor-uploads">

                        <div class="col-lg-12">
                            <div class="ec-vendor-upload-detail row">
                                <div class="col-md-6 mb-3">
                                    <label for="client-name" class="form-label">Client name</label>
                                    <input class="form-control {{ $errors->has('name')? 'is-invalid' :'' }}" id="client-name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Client's Phone</label>
                                    <input id="phone" name="phone" class="form-control here set-slug {{ $errors->has('phone')? 'is-invalid' : '' }}" value="{{ old('phone') }}">
                                    @error("phone")
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="address">Address</label>
                                    <input name="address" type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" id="address" value="{{ old('address') }}">
                                    @error('address')
                                       <span class="invalid-feedback"> {{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="location">Location</label>
                                    <select class="form-control" name="location" id="location">
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->name }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                    @error("location")
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="description"> Detail</label>
                                    <textarea name="detail" id="detail" class="form-control {{ $errors->has('detail') ? 'is-invalid' : '' }}" rows="4"> {{ old('detail') }}</textarea>
                                    @error("detail")
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="vendor" class="form-label">Select Vendor</label>
                                    <select id="vendor" class="form-select {{ $errors->has('vendor') ? 'is-invalid' : '' }}" name="vendor">
                                        <optgroup label="Food">
                                            @foreach ($vendors as $vendor)
                                                @if ($vendor->category_id == 1)
                                                    <option value="{{ $vendor->vendor_id }}">
                                                        {{ $vendor->vendor_name }} </option>
                                                @endif
                                            @endforeach

                                        </optgroup>
                                        <optgroup label="Bakery">
                                            @foreach ($vendors as $vendor)
                                                @if ($vendor->category_id == 2)
                                                    <option value="{{ $vendor->vendor_id }}">
                                                        {{ $vendor->vendor_name }} </option>
                                                @endif
                                            @endforeach

                                        </optgroup>
                                        <optgroup label="All">
                                            @foreach ($vendors as $vendor)
                                                @if ($vendor->category_id == 3)
                                                    <option value="{{ $vendor->vendor_id }}">
                                                        {{ $vendor->vendor_name }} </option>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                    </select>
                                    @error("vendor")
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 " id="order-items">
                                    <div class="d-flex justify-between align-items-center">
                                        <h4 class="mt-3 mb-2">
                                            Enter the items you wish to order
                                        </h4>
                                        <span class="block ml-auto">
                                            <button data-bs-toggle="modal" data-bs-target="#modal-search-food" id="add-new-items"  type="button"  class="my-btn my-btn-primary"> <i class="mdi mdi-plus"></i> New Item</button>
                                        </span>
                                    </div>

                                        <div class="row mt-3">
                                            <div class="col-4">
                                                Item Name
                                            </div>
                                            <div class="col-2">
                                                Quantity
                                            </div>
                                            <div class="col-2">
                                                Price
                                            </div>
                                            <div class="col-2">
                                                Discount
                                            </div>
                                            <div class="col-2 d-flex align-items-center">
                                                Total
                                            </div>
                                         </div>
                                    {{-- <div class="row">
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="Item Name">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" placeholder="Items">
                                        </div>

                                        <div class="col-2">

                                            <input type="number" class="form-control" placeholder="Item Price">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" placeholder="Discount amount">
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <input type="number" class="form-control" placeholder="Total Aamount">
                                            <i class="mdi mdi-plus text-red-100 ml-1" style="color: green;scale: 2"></i>

                                        </div>

                                    </div> --}}
                                </div>


                                <div class="col-12 mt-5">
                                    <div class="row align-items-center">
                                        <h5 class="col-xl-2 col-lg-12 col-md-8 col-12 mb-xl-0 mb-3">Additional Charge:</h5>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-7">
                                            <input  name="additional_charge_reason"  class="form-control {{ $errors->has('additional_charge_reason')?'is-invalid':'' }}" value="{{ old('additional_charge_reason') }}" type="text" name="additional_charge_info" placeholder="Reason...">
                                        </div>
                                        <div class="col-xl-2 col-md-4 col-5">
                                            <input name="additional_charge_amount" class="form-control {{ $errors->has('additional_charge_amount')?'is-invalid':'' }}" value="{{ old('additional_charge_amount') }}" type="number" name="additional_charge" placeholder="amount">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-5">
                                    <div class="row align-items-center">
                                        <h5 class="col-xl-2 col-lg-12 col-md-8 col-12 mb-xl-0 mb-3">Additional Discount:</h5>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-7">
                                            <input name="additional_discount_reason" class="form-control {{ $errors->has('additional_discount_reason')?'is-invalid':'' }}" value="{{ old('additional_discount_reason') }}" type="text" name="additional_charge_info" placeholder="Reason...">
                                        </div>
                                        <div class="col-xl-2 col-md-4 col-5">
                                            <input name="additional_discount_amount" class="form-control {{ $errors->has('additional_discount_amount')?'is-invalid':'' }}" value="{{ old('additional_discount_amount') }}" type="number" name="additional_charge" placeholder="amount">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button  type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</form>

<div class="modal fade" id="modal-search-food" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <form class="modal-header border-bottom-0">
                <input oninput="searchVendorsFood(this)" class="form-control" placeholder="Search...">
            </form>
            <div class="modal-body p-0" data-simplebar="" style="height:320px">
                <ul id="vendor-food-search-result" class="list-unstyled border-top mb-0" >

                </ul>
            </div>
            <div class="modal-footer">
                <button onclick="setNewItems()" class="btn btn-primary save-btn" type="button">Save</button>

            </div>
        </div>
    </div>

</div>
<script>
          function searchVendorsFood(e){
            $("#vendor-food-search-result").html(null);
            let id =  $("#vendor").find(":selected").val();
            $.get(`/supplier/${id}/search/${e.value}`,
           function (foods, textStatus, jqXHR) {
              for (const food of foods) {
                appendVendorFoodSearchResult(food)
              }
           },
        );

   }
</script>
@endsection
