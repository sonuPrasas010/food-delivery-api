@extends('dashboard.dashboard')
@section('content')
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
        <div>
            <h1>Main Category</h1>
            <p class="breadcrumbs">
                <span>
                    <a href="#">Home</a>
                </span>
                <span>
                    <i class="mdi mdi-chevron-right"></i>
                </span>
                Main Category
            </p>
        </div>
        <span class="">
            <button onclick="window.location = '/category/create'" class="my-btn my-btn-primary "> <span
                    class="mdi mdi-plus"></span> Add Category </button>
        </span>


    </div>

    <div class="row mt-1">

        <div class="col-xl-12 col-lg-12">
            <div class="ec-cat-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row justify-content-between top-information">

                            </div>
                            <table id="responsive-data-table" class="table dataTable no-footer"
                                aria-describedby="responsive-data-table_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="responsive-data-table"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Thumb: activate to sort column descending"
                                            style="width: 44.1125px;">Thumb</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                            rowspan="1" colspan="1"
                                            aria-label="Name: activate to sort column ascending" style="width: 44.525px;">
                                            Name</th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Sub Categories: activate to sort column ascending"
                                                style="width: 93.7875px;">Sub Categories</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                            rowspan="1" colspan="1"
                                            aria-label="Product: activate to sort column ascending"
                                            style="width: 49.2625px;">Product</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                            rowspan="1" colspan="1"
                                            aria-label="Total Sell: activate to sort column ascending"
                                            style="width: 34.125px;">Total Sell</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                            rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending" style="width: 40.35px;">
                                            Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                            rowspan="1" colspan="1"
                                            aria-label="Trending: activate to sort column ascending"
                                            style="width: 55.35px;">Trending</th>
                                        <th class="sorting" tabindex="0" aria-controls="responsive-data-table"
                                            rowspan="1" colspan="1"
                                            aria-label="Action: activate to sort column ascending"
                                            style="width: 55.6875px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr class="odd">
                                            <td class="sorting_1"><img class="cat-thumb" src="{{ asset($category->image) }}"
                                                    alt="{{ $category->category_name }}"></td>
                                            <td>{{ $category->category_name }}</td>
                                            {{-- <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">5</span> <span
                                                        class="ec-sub-cat-tag">T-shirt</span> <span
                                                        class="ec-sub-cat-tag">Shirt</span> <span
                                                        class="ec-sub-cat-tag">Dress</span> <span
                                                        class="ec-sub-cat-tag">Jeans</span> <span
                                                        class="ec-sub-cat-tag">Top</span></span>
                                            </td> --}}
                                            <td>28</td>
                                            <td>2161</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge badge-success">Top</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                        data-display="static"><span class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu" style="">
                                                        <a class="dropdown-item"
                                                            href="{{ route('category.edit', $category) }}">Edit</a>
                                                        <a class="dropdown-item" href="#">
                                                            <form
                                                                action="{{ route('category.destroy', $category->category_id) }}"
                                                                method="POST">
                                                                @method('delete')
                                                                @csrf

                                                                <button type="submit" class="delete-btn">
                                                                    Delete
                                                                </button>

                                                            </form>
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <style>

                                    </style> --}}
                                    {{-- <tr class="even">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/footwear.png" alt="Product Image"></td>
                                            <td>Footwear</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">4</span> <span
                                                        class="ec-sub-cat-tag">Sports</span> <span
                                                        class="ec-sub-cat-tag">Casual</span> <span
                                                        class="ec-sub-cat-tag">safety shoes</span> <span
                                                        class="ec-sub-cat-tag">Sandal</span></span></td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/jewelry.png" alt="Product Image"></td>
                                            <td>Jewelry</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">4</span> <span
                                                        class="ec-sub-cat-tag">necklace</span> <span
                                                        class="ec-sub-cat-tag">chain</span> <span
                                                        class="ec-sub-cat-tag">rings</span> <span
                                                        class="ec-sub-cat-tag">earings</span></span></td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td><span class="inactive">Inactive</span></td>
                                            <td><span class="badge badge-success">Top</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/perfume.png" alt="Product Image"></td>
                                            <td>Perfume</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">4</span> <span
                                                        class="ec-sub-cat-tag">Clothes perfume</span> <span
                                                        class="ec-sub-cat-tag">deodorant</span> <span
                                                        class="ec-sub-cat-tag">Flower fragrance</span> <span
                                                        class="ec-sub-cat-tag">Air Freshener</span></span></td>
                                            <td>38</td>
                                            <td>1561</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/cosmetics.png" alt="Product Image"></td>
                                            <td>Cosmetics</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">10</span> <span
                                                        class="ec-sub-cat-tag">Makeup kit</span> <span
                                                        class="ec-sub-cat-tag">Hair gel</span> <span
                                                        class="ec-sub-cat-tag">sunscreen</span> <span
                                                        class="ec-sub-cat-tag">facewash</span> <span
                                                        class="ec-sub-cat-tag">Body shop</span> <span
                                                        class="ec-sub-cat-tag">Lipstick</span> <span
                                                        class="ec-sub-cat-tag">eye liner</span> <span
                                                        class="ec-sub-cat-tag">Hair Shampoo</span> <span
                                                        class="ec-sub-cat-tag">Beauty Cream</span> <span
                                                        class="ec-sub-cat-tag">Skin Serum</span></span></td>
                                            <td>18</td>
                                            <td>1061</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-danger">Low</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/glasses.png" alt="Product Image"></td>
                                            <td>Glasses</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">2</span> <span
                                                        class="ec-sub-cat-tag">Sunglasses</span> <span
                                                        class="ec-sub-cat-tag">Lenses</span></span></td>
                                            <td>82</td>
                                            <td>10061</td>
                                            <td><span class="inactive">Inactive</span></td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/bag.png" alt="Product Image"></td>
                                            <td>Bags</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">4</span> <span
                                                        class="ec-sub-cat-tag">shopping bag</span> <span
                                                        class="ec-sub-cat-tag">Gym backpack</span> <span
                                                        class="ec-sub-cat-tag">purse</span> <span
                                                        class="ec-sub-cat-tag">wallet</span></span></td>
                                            <td>18</td>
                                            <td>3061</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge badge-success">Top</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/footwear.png" alt="Product Image"></td>
                                            <td>Footwear</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">4</span> <span
                                                        class="ec-sub-cat-tag">Sports</span> <span
                                                        class="ec-sub-cat-tag">Casual</span> <span
                                                        class="ec-sub-cat-tag">safety shoes</span> <span
                                                        class="ec-sub-cat-tag">Sandal</span></span></td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/jewelry.png" alt="Product Image"></td>
                                            <td>Jewelry</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">4</span> <span
                                                        class="ec-sub-cat-tag">necklace</span> <span
                                                        class="ec-sub-cat-tag">chain</span> <span
                                                        class="ec-sub-cat-tag">rings</span> <span
                                                        class="ec-sub-cat-tag">earings</span></span></td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td><span class="inactive">Inactive</span></td>
                                            <td><span class="badge badge-success">Top</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1"><img class="cat-thumb"
                                                    src="assets/img/category/perfume.png" alt="Product Image"></td>
                                            <td>Perfume</td>
                                            <td><span class="ec-sub-cat-list"><span class="ec-sub-cat-count"
                                                        title="Total Sub Categories">4</span> <span
                                                        class="ec-sub-cat-tag">Clothes perfume</span> <span
                                                        class="ec-sub-cat-tag">deodorant</span> <span
                                                        class="ec-sub-cat-tag">Flower fragrance</span> <span
                                                        class="ec-sub-cat-tag">Air Freshener</span></span></td>
                                            <td>38</td>
                                            <td>1561</td>
                                            <td>ACTIVE</td>
                                            <td><span class="badge bg-primary">Medium</span></td>
                                            <td>
                                                <div class="btn-group"><button type="button"
                                                        class="btn btn-outline-success">Info</button> <button
                                                        type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static"><span
                                                            class="sr-only">Info</span></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">Edit</a> <a class="dropdown-item"
                                                            href="#">Delete</a></div>
                                                </div>
                                            </td>
                                        </tr> --}}
                                </tbody>
                            </table>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
