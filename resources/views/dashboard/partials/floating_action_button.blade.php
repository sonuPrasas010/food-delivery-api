    {{-- floatin action button --}}
    <div style=" z-index : 10; " class="dropup position-fixed bottom-0 end-0 m-5">
        <button style="border-radius: 50%; height: 50px; width: 50px;" type="button" class="btn btn-success"
            data-bs-toggle="modal" data-bs-target="#filter">
            <i class="mdi mdi-filter"></i>
            <span class="visually-hidden">Filter</span>
        </button>
    </div>
    <div class="modal fade text-center" id="filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="" method="get">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter Result</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="d-flex mt-1 align-items-center">
                                <label for="name" class="form-label col-2">Customer Name</label>
                                <input type="text" name="name" id="name" class="form-control "
                                    placeholder="Name of client">
                            </div>

                            <div class="d-flex mt-1 align-items-center">
                                <label for="email" class="form-label col-2">Email</label>
                                <input type="email" name="email" id='email' class="form-control"
                                    placeholder="Email of client">
                            </div>

                            <div class="d-flex mt-1 align-items-center">
                                <label for="address" class="form-label col-2">Address</label>
                                <input type="text" name="address" id='address' class="form-control" placeholder="Address Of Client">
                            </div>

                            <div class="d-flex mt-1 align-items-center">
                                <label for="payment_status" class="form-label col-2">Payment Status</label>
                                <select name="payment_status" id="payment_status" class="form-select">
                                    <option value="">Choose One</option>

                                    <option> {{ App\Http\Controllers\OrderController::PAYMENT_STATUS_UNPAID }} </option>
                                    <option> {{  App\Http\Controllers\OrderController::PAYMENT_STATUS_PAID}} </option>


                                </select>
                            </div>

                            <div class="d-flex mt-1 align-items-center">
                                <label for="payment_status" class="form-label col-2">Order Status</label>
                                <select name="payment_status" id="payment_status" class="form-select">
                                    <option value="">Choose One</option>
                                    <option> {{ App\Http\Controllers\OrderController::ORDER_STATUS_CANCELLED }} </option>
                                    <option> {{  App\Http\Controllers\OrderController::ORDER_STATUS_PENDING}} </option>
                                    <option> {{  App\Http\Controllers\OrderController::ORDER_STATUS_VERIFIED}} </option>
                                    <option> {{  App\Http\Controllers\OrderController::ORDER_STATUS_PROCESSING}} </option>
                                    <option> {{  App\Http\Controllers\OrderController::ORDER_STATUS_DELIVERING}} </option>
                                    <option> {{  App\Http\Controllers\OrderController::ORDER_STATUS_DELIVERED}} </option>
                                </select>
                            </div>



                            <div class="d-flex mt-1 align-items-center">
                                <label for="location" class="form-label col-2">Location</label>
                                <select name="location" id="location" class="form-select">
                                    <option value="">Choose One</option>
                                    @foreach ($locations as $location)
                                    <option value="{{ $location->name }}">{{ $location->name }}</option>
                                @endforeach

                                </select>
                            </div>

                            <div class="d-flex mt-1 align-items-center">
                                <label for="location" class="form-label col-2">Payment</label>
                                <select name="location" id="location" class="form-select">
                                    <option value="">Choose One</option>
                                    @foreach ($locations as $location)
                                    <option value="{{ $location->name }}">{{ $location->name }}</option>
                                @endforeach

                                </select>
                            </div>

                            <div class="d-flex mt-1 align-items-center">
                                <label for="restuarant" class="form-label col-2">Reatuarent</label>
                                <select id="vendor" class="form-select" name="vendor">
                                    <option value="">Choose One</option>
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
                            </div>


                            <div class="d-flex mt-1 align-items-center">
                                <label for="date" class="form-label col-2">date</label>
                                <input type="hidden" name="date" id="date">
                                <div id="reportrange"
                                    style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
                            </div>

                            <script>
                                window.onload = function() {
                                    var start = moment().subtract(29, 'days');
                                    var end = moment();

                                    function cb(start, end) {
                                        $("input[name='date']").val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                    }
                                    $('#reportrange').daterangepicker({
                                        startDate: start,
                                        endDate: end,
                                        ranges: {
                                            'Today': [moment(), moment()],
                                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                                                .endOf('month')
                                            ]
                                        }
                                    }, cb);

                                    cb(start, end);
                                }
                            </script>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- floating action button close --}}
