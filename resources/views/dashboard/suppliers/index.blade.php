@extends('dashboard.dashboard')
@section('content')
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Vendor List</h1>
            <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span><i
                        class="mdi mdi-chevron-right"></i></span>Vendor</p>
        </div>
        <div>
            <button type="button" class="btn btn-primary" onclick="window.location = '{{route('supplier.create')}}'">
                Add Vendor
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="ec-vendor-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <table id="responsive-data-table" class="table dataTable no-footer"
                                aria-describedby="responsive-data-table_info">
                                <thead>
                                    <tr>
                                        <th >Profile</th>
                                        <th > Name</th>
                                        <th> Email</th>
                                        <th>Product</th>
                                        <th >Total Sell</th>
                                        <th>Status</th>
                                        <th >Join On</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendors as $vendor)
                                        <tr class="odd">
                                            <td class="sorting_1"><img class="vendor-thumb" src="{{ asset($vendor->vendor_image)}}"
                                                    alt="vendor image"></td>
                                            <td>{{ $vendor->vendor_name }}</td>
                                            <td>{{ $vendor->vendor_email }}</td>
                                            <td>28</td>
                                            <td>2161</td>
                                            <td>ACTIVE</td>
                                            <td>{{ $vendor->created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"class="btn btn-outline-success">Info</button>
                                                     <button type="button"class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                        data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('supplier.edit',$vendor) }}">Edit</a>
                                                        <a class="dropdown-item" href="#">
                                                                <form action="{{ route('supplier.destroy',$vendor) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="delete-btn w-100" > Delete </button>
                                                                </form>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--
                                        <tr class="even">
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u2.jpg" alt="vendor image"></td>
                                            <td>Johnee Bolbi</td>
                                            <td>johneebolbi@gmail.com</td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-25</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u3.jpg" alt="vendor image"></td>
                                            <td>Johnee Bolbi</td>
                                            <td>johneebolbi@gmail.com</td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-25</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u4.jpg" alt="vendor image"></td>
                                            <td>Mohini Marlo</td>
                                            <td>mohinimarlo@gmail.com</td>
                                            <td>38</td>
                                            <td>1561</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-21</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u5.jpg" alt="vendor image"></td>
                                            <td>Nitilo Kathilo</td>
                                            <td>nitilokathilo@gmail.com</td>
                                            <td>18</td>
                                            <td>1061</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-18</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u6.jpg" alt="vendor image"></td>
                                            <td>Hardi Sandhu</td>
                                            <td>hardisandhu@gmail.com</td>
                                            <td>82</td>
                                            <td>10061</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-14</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u7.jpg" alt="vendor image"></td>
                                            <td>Bhavlo Malvia</td>
                                            <td>bhavlomalvia@gmail.com</td>
                                            <td>18</td>
                                            <td>3061</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-05</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u8.jpg" alt="vendor image"></td>
                                            <td>Jeni Dusuja</td>
                                            <td>jenidusuja@gmail.com</td>
                                            <td>60</td>
                                            <td>6061</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-01</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u1.jpg" alt="vendor image"></td>
                                            <td>Marlee Rena</td>
                                            <td>marleerena@gmail.com</td>
                                            <td>28</td>
                                            <td>2161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-30</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u2.jpg" alt="vendor image"></td>
                                            <td>Johnee Bolbi</td>
                                            <td>johneebolbi@gmail.com</td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-25</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u3.jpg" alt="vendor image"></td>
                                            <td>Johnee Bolbi</td>
                                            <td>johneebolbi@gmail.com</td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-25</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u4.jpg" alt="vendor image"></td>
                                            <td>Mohini Marlo</td>
                                            <td>mohinimarlo@gmail.com</td>
                                            <td>38</td>
                                            <td>1561</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-21</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u5.jpg" alt="vendor image"></td>
                                            <td>Nitilo Kathilo</td>
                                            <td>nitilokathilo@gmail.com</td>
                                            <td>18</td>
                                            <td>1061</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-18</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u6.jpg" alt="vendor image"></td>
                                            <td>Hardi Sandhu</td>
                                            <td>hardisandhu@gmail.com</td>
                                            <td>82</td>
                                            <td>10061</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-14</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u7.jpg" alt="vendor image"></td>
                                            <td>Bhavlo Malvia</td>
                                            <td>bhavlomalvia@gmail.com</td>
                                            <td>18</td>
                                            <td>3061</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-05</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u8.jpg" alt="vendor image"></td>
                                            <td>Jeni Dusuja</td>
                                            <td>jenidusuja@gmail.com</td>
                                            <td>60</td>
                                            <td>6061</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-01</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u1.jpg" alt="vendor image"></td>
                                            <td>Marlee Rena</td>
                                            <td>marleerena@gmail.com</td>
                                            <td>28</td>
                                            <td>2161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-30</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u2.jpg" alt="vendor image"></td>
                                            <td>Johnee Bolbi</td>
                                            <td>johneebolbi@gmail.com</td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-25</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u3.jpg" alt="vendor image"></td>
                                            <td>Johnee Bolbi</td>
                                            <td>johneebolbi@gmail.com</td>
                                            <td>68</td>
                                            <td>5161</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-25</td>
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
                                            <td class="sorting_1"><img class="vendor-thumb"
                                                    src="assets/img/vendor/u4.jpg" alt="vendor image"></td>
                                            <td>Mohini Marlo</td>
                                            <td>mohinimarlo@gmail.com</td>
                                            <td>38</td>
                                            <td>1561</td>
                                            <td>ACTIVE</td>
                                            <td>2021-10-21</td>
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
    <div class="modal fade modal-add-contact" id="addVendor" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header px-4">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Vendor</h5>
                    </div>
                    <div class="modal-body px-4">

                    </div>
                    <div class="modal-footer px-4"><button type="button" class="btn btn-secondary btn-pill"
                            data-bs-dismiss="modal">Cancel</button> <button type="button"
                            class="btn btn-primary btn-pill">Save Contact</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection
