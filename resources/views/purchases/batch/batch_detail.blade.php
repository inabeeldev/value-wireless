@extends('layouts.app')

@section('content')
<div class="container-fluid batch-detail">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="main-content">
          <div class="page-content">
            <div class="container-fluid">
              <div class="row">
                @include('layouts.messages')
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="card">
                        <div class="card-body detail">
                          <p> <strong>  Batch No</strong></p>
                          <p> <strong>{{ $batch_detail['batch_no'] }}</strong></p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="card">
                        <div class="card-body detail">
                          <p> <strong>  Supplier</strong></p>
                          <p> <strong>{{ $supplier->name }}</strong></p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="card">
                        <div class="card-body detail">
                          <p> <strong>  Warehouse</strong></p>
                          <p> <strong>{{ $warehouse->name }}</strong></p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="card">
                        <div class="card-body detail">
                          <p> <strong>  Paid</strong></p>
                          <p> <strong>{{ $batch_detail['paid'] }} AED</strong></p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              <p> <b>   Custom Batch N</b> {{ $batch_detail['batch_no'] }}</p>
                  </div>
                </div>
              </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="row">
                     <div class="col-12">
                      <!-- Add Device Form -->
                      <form id="add-device-form">
                        <div class="card">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <h2> Add Devices</h2>
                                        <!-- Device selection dropdown -->
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                            <select class="form-control" id="device-select">
                                                <option value="">Select Device</option>
                                                @foreach($devices as $device)
                                                    <option value="{{ $device->id }}">{{ $device->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Grade selection dropdown -->
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-12">
                                            <select class="form-control" id="grade-select">
                                                <option value="">Select Grade</option>
                                                @foreach($grades as $grade)
                                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Purchase price input -->
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                            <input type="text" class="form-control" id="purchase-price" placeholder="Purchase price">
                                        </div>
                                        <!-- Add Goods button -->
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-12">
                                            <button type="button" class="form-control btn btn-info" id="add-goods-btn">Add Goods</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12"><p class="batch-name"><b>Custom Batch N : </b> 11111</p></div>
                            </div>
                        </div>
                    </form>
              <!-- Add device Form end -->
              </div> <!-- end col -->
               </div>

                     <div class="card">
                    <div class="card-body">
                 <div class="row">
                     <div class="col-12">
                      <form action="" method="">

                <div class="container-fluid show-device">
                  <div class="row items-heading">
                     <div class="col-lg-1 col-md-1 col-sm-1 col-12">

                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                       <h6>Goods / Items</h6>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                     <h6>IMEI/SN</h6>
                    </div>

                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6>  Custom Color</h6>
                    </div>

                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6>  Grade</h6>
                    </div>


                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                     <h6> Status</h6>
                    </div>

                      <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6>  Quantity</h6>
                    </div>
                     <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6>  Purchase price</h6>
                    </div>

                     <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                       <h6>  Amount</h6>
                    </div>

                     <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                     <h6>  Cross</h6>
                    </div>
                  </div>

                  <!-- Goods Detail form -->

                         <!-- item -->
                         <div class="row items">
                           <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                       <img class="right-icon-img" src="{{ asset('public/images/icon-right.png') }}">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                       <h6 class="device1">Apple iPhone 11 64GB</h6>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                     <h6></h6>
                    </div>

                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6>  </h6>
                    </div>

                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6 class="grade1">  A HSO</h6>
                    </div>


                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                     <h6> </h6>
                    </div>

                      <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                     <h6> 1</h6>
                    </div>
                     <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6>   <h6> <input type="text" name="" class="form-control"></h6></h6>
                    </div>

                     <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                       <h6>  0 ADE</h6>
                    </div>

                     <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                     <h6 class="cross">  &times;</h6>
                    </div>
                  </div>

                  <div class="row imie-form">
                    <div class="col-lg-12 col-md-12 col-12 ">
                     <div class="imie-form-inner">
                     <div class="d-flex justify-content-between">
                        <input type="text" class="form-control" id="imei" placeholder="Enter or scan IMEI/SN/barcode">
                         <div id="add-imie-btn"><img class="tik-icon" src="{{ asset('public/images/tik-icon.PNG')}}"></div>

                         </div>
                         <!-- new  IMIES list -->
                      <table class="imie-table">
                        <tr>
                            <td id="imei-list"></td>
                        </tr>
                      </table>
                      </div>

                    </div>

                  </div>

                </div>
                  </div>
                </div>
              <div>

              </div>
              </div> <!-- end col -->
               </div>
          </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('customJS')
<script>
   document.addEventListener("DOMContentLoaded", function () {
    const addGoodsBtn = document.getElementById("add-goods-btn");

    addGoodsBtn.addEventListener("click", function () {
        const deviceSelect = document.getElementById("device-select");
        const gradeSelect = document.getElementById("grade-select");
        const purchasePriceInput = document.getElementById("purchase-price");

        // Get selected device and grade values
        const deviceId = deviceSelect.value;
        const gradeId = gradeSelect.value;
        const purchasePrice = purchasePriceInput.value;

        // Validate input (you can add more validation)
        if (!deviceId || !gradeId || !purchasePrice) {
            alert("Please select a device, grade, and enter purchase price.");
            return;
        }

        // Send data to the server using Ajax
        const formData = new FormData();
        formData.append("device_id", deviceId);
        formData.append("grade_id", gradeId);
        formData.append("purchase_price", purchasePrice);

        fetch("{{ route('add-batch-device') }}", {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update the content of the specific div elements
                const deviceNameElement = document.querySelector(".device1");
                const gradeNameElement = document.querySelector(".grade1");

                // Update the content of the elements
                deviceNameElement.textContent = data.deviceName; // Update with device name
                gradeNameElement.textContent = data.gradeName;   // Update with grade name
            } else {
                alert("Failed to add the device.");
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });
});

</script>

@endsection
