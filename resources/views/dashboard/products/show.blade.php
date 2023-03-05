@extends('dashboard.dashboard')
@section('content')
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Product Detail</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span><i
                        class="mdi mdi-chevron-right"></i></span>Product</p>
        </div>
        <div><a href="product-list.html" class="btn btn-primary">Edit</a></div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Product Detail</h2>
                </div>
                <div class="card-body product-detail">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            {{-- <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <div class="single-slide zoom-image-hover"><img class="img-responsive"
                                                    src="{{ asset($food->image_url) }}" alt="{{ $food->food_name }}"></div>
                                            <div class="single-slide zoom-image-hover"><img class="img-responsive"
                                                    src="{{ asset($food->small_image_url) }}" alt="{{ $food->food_name }}">
                                            </div>
                                            <div class="single-slide zoom-image-hover"><img class="img-responsive"
                                                    src="{{ asset($food->large_image_bg_url) }}"
                                                    alt="{{ $food->food_name }}"></div>
                                            <div class="single-slide zoom-image-hover"><img class="img-responsive"
                                                    src="{{ asset($food->small_image_bg_url) }}"
                                                    alt="{{ $food->food_name }}"></div>

                                        </div>
                                        <div class="single-nav-thumb">
                                            <div class="single-slide"><img class="img-responsive"
                                                    src="{{ asset($food->image_url) }}" alt="{{ $food->food_name }}"></div>
                                            <div class="single-slide"><img class="img-responsive"
                                                    src="{{ asset($food->small_image_url) }}"
                                                    alt="{{ $food->food_name }}"></div>
                                            <div class="single-slide"><img class="img-responsive"
                                                    src="{{ asset($food->large_image_bg_url) }}"
                                                    alt="{{ $food->food_name }}"></div>
                                            <div class="single-slide"><img class="img-responsive"
                                                    src="{{ asset($food->small_image_bg_url) }}"
                                                    alt="{{ $food->food_name }}"></div>

                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="owl-carousel">
                                {{-- <div class="single-product-cover"> --}}
                                    <div class="single-slide ">
                                        <img class="img-responsive"
                                        src="{{ asset($food->image_url) }}" alt="{{ $food->food_name }}">
                                    </div>
                                {{-- </div> --}}
                                {{-- <div class="single-product-cover"> --}}
                                    <div class="single-slide ">
                                        <img class="img-responsive"
                                        src="{{ asset($food->small_image_url) }}" alt="{{ $food->food_name }}">
                                    </div>
                                {{-- </div> --}}
                                {{-- <div class="single-product-cover"> --}}
                                    <div class="single-slide">
                                        <img class="img-responsive"
                                        src="{{ asset($food->large_image_bg_url) }}" alt="{{ $food->food_name }}">
                                    </div>
                                {{-- </div> --}}
                                {{-- <div class="single-product-cover"> --}}
                                    <div class="single-slide">
                                        <img class="img-responsive"
                                        src="{{ asset($food->small_image_bg_url) }}" alt="{{ $food->food_name }}">
                                    </div>
                                {{-- </div> --}}



                              </div>


                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="row product-overview">
                                <div class="col-12">
                                    <h5 class="product-title">{{ $food->food_name }}</h5>
                                    <p class="product-rate"><i class="mdi mdi-star is-rated"></i> <i
                                            class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i>
                                    </p>
                                    <p class="product-desc">{{ $food->short_desc }}</p>
                                    <p class="product-desc"> {{ $food->long_desc }} </p>
                                    <div class="ec-ofr">
                                        <h6>Available offers</h6>
                                        <ul>
                                            @if ($food->discount > 0)
                                                <li><b>Special Price :</b> Get extra {{ $food->discount }}% off (price
                                                    inclusive of discount)
                                                    {{-- <a href="#">T&amp;C</a></li> --}}
                                            @endif

                                            {{-- <li><b>Bank Offer :</b> 10% off on XYZ Bank Cards, up to $12. On orders of --}}
                                            {{-- $200 and above <a href="#">T&amp;C</a></li>
                                                <li><b>Bank Offer :</b> 5% Unlimited Cashback on Ekka XYZ Bank Credit Card
                                                    <a href="#">T&amp;C</a></li>
                                                <li><b>Bank Offer :</b> Flat $50 off on first Ekka Pay Later order of $200
                                                    and above <a href="#">T&amp;C</a></li> --}}
                                        </ul>
                                    </div>
                                    <p class="product-price">Price: Rs.{{ $food->price }}</p>
                                    {{-- <p class="product-sku">SKU#: WH12</p> --}}
                                    {{-- <ul class="product-size">
                                            <li class="size"><span>S</span></li>
                                            <li class="size"><span>M</span></li>
                                            <li class="size"><span>L</span></li>
                                            <li class="size"><span>XL</span></li>
                                        </ul> --}}
                                    {{-- <ul class="product-color">
                                            <li class="color"><span style="background-color:#90cdf7"></span></li>
                                            <li class="color"><span style="background-color:#ff3b66"></span></li>
                                            <li class="color"><span style="background-color:#ffc476"></span></li>
                                            <li class="color"><span style="background-color:#1af0ba"></span></li>
                                            <li class="color"><span style="background-color:#f887d6"></span></li>
                                        </ul> --}}
                                    <div class="product-stock">
                                        <div class="stock">
                                            <p class="title">Available</p>
                                            <p class="text">180</p>
                                        </div>
                                        <div class="stock">
                                            <p class="title">Pending</p>
                                            <p class="text">50</p>
                                        </div>
                                        <div class="stock">
                                            <p class="title">InOrder</p>
                                            <p class="text">20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 u-card">
                            <div class="card card-default seller-card">
                                <div class="card-body text-center"><a href="javascript:0"
                                        class="text-secondary d-inline-block">
                                        <div class="image mb-3">
                                            <img src="{{ asset($food->vendor->vendor_image) }}"
                                                class="img-fluid rounded-circle" alt="Avatar Image"></div>
                                        <h5 class="text-dark">{{ $food->vendor->vendor_name }}</h5>
                                        <p class="product-rate"><i class="mdi mdi-star is-rated"></i> <i
                                                class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star is-rated"></i> <i
                                                class="mdi mdi-star is-rated"></i> <i class="mdi mdi-star"></i></p>
                                        <ul class="list-unstyled">
                                            <li class="d-flex mb-1 "><i class="mdi mdi-map mr-1"></i>
                                                <span>{{ $food->vendor->vendor_address }}</span>
                                                </li>
                                            <li class="d-flex mb-1"><i class="mdi mdi-email mr-1"></i>
                                                <span>{{ $food->vendor->vendor_email }}</span>
                                            </li>
                                            <li class="d-flex"><i class="mdi mdi-whatsapp mr-1"></i>
                                                 <span>{{ $food->vendor->vendor_phone}}</span>
                                            </li>
                                        </ul>
                                    </a></div>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="slider-nav">
                        <div>
                            <h3>1</h3>
                        </div>
                        <div>
                            <h3>2</h3>
                        </div>
                        <div>
                            <h3>3</h3>
                        </div>
                        <div>
                            <h3>4</h3>
                        </div>
                        <div>
                            <h3>5</h3>
                        </div>
                        <div>
                            <h3>6</h3>
                        </div>
                    </div> --}}




                    <div class="row review-rating mt-4">
                        <div class="col-12">
                            <ul class="nav nav-tabs" id="myRatingTab" role="tablist">
                                <li class="nav-item"><a class="nav-link" id="product-detail-tab" data-bs-toggle="tab"
                                        data-bs-target="#productdetail" href="#productdetail" role="tab"
                                        aria-selected="false"><i class="mdi mdi-library-books mr-1"></i> Detail</a></li>
                                <li class="nav-item"><a class="nav-link active" id="product-information-tab"
                                        data-bs-toggle="tab" data-bs-target="#productinformation" href="#productinformation"
                                        role="tab" aria-selected="true"><i class="mdi mdi-information mr-1"></i>Info</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="product-reviews-tab" data-bs-toggle="tab"
                                        data-bs-target="#productreviews" href="#productreviews" role="tab"
                                        aria-selected="false"><i class="mdi mdi-star-half mr-1"></i>
                                        Reviews</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane pt-3 fade" id="productdetail" role="tabpanel">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged.</p>
                                    <ul class="features">
                                        <li>Any Product types that You want - Simple, Configurable</li>
                                        <li>Downloadable/Digital Products, Virtual Products</li>
                                        <li>Inventory Management with Backordered items</li>
                                        <li>Flatlock seams throughout.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane pt-3 fade active show" id="productinformation" role="tabpanel">
                                    <ul>
                                        <li><span>Weight</span> 1000 g</li>
                                        <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                        <li><span>Color</span> Black, Pink, Red, White</li>
                                    </ul>
                                </div>
                                <div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel">
                                    <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar"><img src="assets/img/review-image/1.jpg"
                                                    alt=""></div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <p class="ec-t-review-name">Jeny Doe</p>
                                                    <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i
                                                            class="mdi mdi-star is-rated"></i> <i
                                                            class="mdi mdi-star is-rated"></i> <i
                                                            class="mdi mdi-star is-rated"></i> <i
                                                            class="mdi mdi-star"></i></div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar"><img src="assets/img/review-image/2.jpg"
                                                    alt=""></div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <p class="ec-t-review-name">Linda Morgus</p>
                                                    <div class="ec-t-rate"><i class="mdi mdi-star is-rated"></i> <i
                                                            class="mdi mdi-star is-rated"></i> <i
                                                            class="mdi mdi-star is-rated"></i> <i
                                                            class="mdi mdi-star is-rated"></i> <i
                                                            class="mdi mdi-star"></i></div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
