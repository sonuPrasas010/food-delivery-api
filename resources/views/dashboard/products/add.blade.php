@extends('dashboard.dashboard')

@section('content')
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Add Product</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span><i
                        class="mdi mdi-chevron-right"></i></span>Product</p>
        </div>
        <div><a href="product-list.html" class="btn btn-primary">View All</a></div>
    </div>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())

                        {{!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}}
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Add Product</h2>
                    </div>
                    <div class="card-body">

                        <div class="row ec-vendor-uploads">
                            <div class="col-lg-4">
                                <div class="ec-vendor-img-upload">
                                    <div class="ec-vendor-main-img row">
                                        <div class="avatar-upload col-12">
                                            <span>Large Image without Background (760 X 765) </span>
                                            <div class="avatar-edit">
                                                <input name="food_image" type="file" id="imageUpload" class="ec-image-upload"
                                                    accept=".png, .jpg, .jpeg">
                                                <label  for="imageUpload"><img src="{{ asset('img/icons/edit.svg') }}"
                                                        class="svg_img header_svg is-invalid" alt="edit">
                                                </label>
                                            </div>
                                            <div class="avatar-preview ec-preview">
                                                <div class="imagePreview ec-div-preview"><img class="ec-image-preview"
                                                        src="{{ asset('img/icons/vender-upload-preview.jpg') }}"
                                                        alt="edit">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">Images with background</div>
                                        <div class="thumb-upload-set col-md-12">

                                            <div class="thumb-upload">
                                                <div class="thumb-edit"><input type="file" id="thumbUpload01"
                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg"><label
                                                        for="imageUpload"><img src="{{ asset('img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit"></label></div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview"><img
                                                            class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('img/icons/vender-upload-preview.jpg') }}"
                                                            alt="edit"></div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit"><input type="file" id="thumbUpload02"
                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg"><label
                                                        for="imageUpload"><img src="{{ asset('img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit"></label></div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview"><img
                                                            class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('img/icons/vender-upload-preview.jpg') }}"
                                                            alt="edit"></div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit"><input type="file" id="thumbUpload03"
                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg"><label
                                                        for="imageUpload"><img src="{{ asset('img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit"></label></div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview"><img
                                                            class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('img/icons/vender-upload-preview.jpg') }}"
                                                            alt="edit"></div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit"><input type="file" id="thumbUpload04"
                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg"><label
                                                        for="imageUpload"><img src="{{ asset('img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit"></label></div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview"><img
                                                            class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('img/icons/vender-upload-preview.jpg') }}"
                                                            alt="edit"></div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit"><input type="file" id="thumbUpload05"
                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg"><label
                                                        for="imageUpload"><img src="{{ asset('img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit"></label></div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview"><img
                                                            class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('img/icons/vender-upload-preview.jpg') }}"
                                                            alt="edit"></div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload">
                                                <div class="thumb-edit"><input type="file" id="thumbUpload06"
                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg"><label
                                                        for="imageUpload"><img src="{{ asset('img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit"></label></div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview"><img
                                                            class="image-thumb-preview ec-image-preview"
                                                            src="{{ asset('img/vender-upload-thumb-preview.jpg') }}"
                                                            alt="edit"></div>
                                                </div>
                                            </div>

                                            <div>Small Image without Background (130 X 145) </div>
                                            <div class="thumb-upload">

                                                <div class="thumb-edit">
                                                    <input type="file" id="thumbUpload07" name="food_image_small" class="ec-image-upload" accept=".png, .jpg, .jpeg">
                                                    <label for="imageUpload07">
                                                        <img src="{{ asset('img/icons/edit.svg') }}" class="svg_img header_svg" alt="edit">
                                                    </label>
                                                </div>
                                                <div class="thumb-preview ec-preview">
                                                    <div class="image-thumb-preview">
                                                        <img class="image-thumb-preview ec-image-preview" src="{{ asset('img/icons/vender-upload-preview.jpg') }}"alt="edit">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="ec-vendor-upload-detail row">
                                    <div class="col-md-6 mb-3">
                                        <label for="product-name" class="form-label">Product name</label>
                                        <input class="form-control {{ $errors->has('name')? 'is-invalid' :'' }}" id="product-name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input id="slug" name="slug" class="form-control here set-slug {{ $errors->has('slug')? 'is-invalid' : '' }}" value="{{ old('slug') }}">
                                        @error("slug")
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- <div class="col-md-6">
                                    <label class="form-label">Select Categories</label>
                                    <select name="categories" id="Categories" class="form-select">
                                        <optgroup label="Fashion">
                                            <option value="t-shirt">T-shirt</option>
                                            <option value="dress">Dress</option>
                                        </optgroup>
                                        <optgroup label="Furniture">
                                            <option value="table">Table</option>
                                            <option value="sofa">Sofa</option>
                                        </optgroup>
                                        <optgroup label="Electronic">
                                            <option value="phone">I Phone</option>
                                            <option value="laptop">Laptop</option>
                                        </optgroup>
                                    </select>
                                </div> --}}

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="short_description">Sort Description</label>
                                        <textarea class="form-control {{ $errors->has('short_description') ? 'is-invalid' : '' }}" rows="2" id="short_description" name="short_description">
                                           {{ old('short_description') }}
                                        </textarea>
                                        @error("short_description")
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- <div class="col-md-8 mb-25"><label class="form-label">Size</label>
                                    <div class="form-checkbox-box">
                                        <div class="form-check form-check-inline"><input type="checkbox" name="size1"
                                                value="size"><label>S</label></div>
                                        <div class="form-check form-check-inline"><input type="checkbox" name="size1"
                                                value="size"><label>M</label></div>
                                        <div class="form-check form-check-inline"><input type="checkbox" name="size1"
                                                value="size"><label>L</label></div>
                                        <div class="form-check form-check-inline"><input type="checkbox" name="size1"
                                                value="size"><label>XL</label></div>
                                        <div class="form-check form-check-inline"><input type="checkbox" name="size1"
                                                value="size"><label>XXL</label></div>
                                    </div>
                                </div> --}}

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="price1">Price <span>( In Rupee)</span></label>
                                        <input name="price" type="number" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price1" value="{{ old('price') }}">
                                        @error('price')
                                           <span class="invalid-feedback"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="discount1">Discount</label>
                                        <input name="discount" type="number" step=".1" class="form-control {{ $errors->has('discount') ? 'is-invalid':'' }}" id="discount1" value="{{ old('discount') }}">
                                        @error("discount")
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="description">Ful Detail</label>
                                        <textarea name="long_description" id="description" class="form-control {{ $errors->has('long_description') ? 'is-invalid' : '' }}" rows="4"> {{ old('long_description') }}</textarea>
                                        @error("long_description")
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="" class="form-label">Select Vendor</label>
                                        <select class="form-select {{ $errors->has('vendor') ? 'is-invalid' : '' }}" name="vendor">
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
                                    <div class="col-md-12 mb-5">
                                        <label for="" class="form-label">Select Category:</label>
                                        <br>
                                        @foreach ($categories as $category)
                                            <label class="form-label  mx-2" for="{{ $category->category_name }}">
                                                {{ $category->category_name }}
                                                <input value={{ $category->category_id }} class="checkbox-info"
                                                    type="checkbox" name="selected_category[]"
                                                    id="{{ $category->category_name }}">
                                            </label>
                                        @endforeach
                                        <br>
                                        @error("selected_category")
                                        <span class="text-danger small">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    {{-- <div class="col-md-12">
                                    <label class="form-label">Product Tags <span>( Type and make comma to separate tags
                                            )</span></label>
                                    <div class="bootstrap-tagsinput">
                                        <input type="text" placeholder="">
                                    </div>
                                    <input class="form-control" id="group_tag" name="group_tag" placeholder=""
                                        data-role="tagsinput" style="display: none;">
                                </div> --}}
                                    <div class="col-md-12"><button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </form>
@endsection
