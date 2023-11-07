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
                                        <div id="loader" class="loader" style="display: none;"></div>

                                    <div class="row justify-content-end">
                                        <h2>Add Devices</h2>
                                        <!-- Device selection dropdown -->
                                              <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                                            <select class="form-control" id="">
                                                <option value="">Select Manufacturer</option>
                                                <option>Apple</option>
                                              <option>Samsung</option>

                                            </select>
                                              <a href="">Add new Manufacturer</a>

                                        </div>

                                        
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                                            <select class="form-control" id="deviceSelect">
                                                <option value="">Select Model</option>

                                                @foreach($devices as $device)
                                                    <option value="{{ $device->id }}">{{ $device->name }}</option>
                                                @endforeach

                                            </select>
                                              <a href="">Add new Model</a>

                                        </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                                            <select class="form-control" id="">
                                                <option value="">Select Color</option>

                                      
                                            </select>
                                              <a href="">Add new Color</a>

                                        </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                                            <select class="form-control" id="">
                                                <option value="">Select GB</option>

                                           

                                            </select>
                                              <a href="">Add new GB</a>

                                        </div>
                                        <!-- Grade selection dropdown -->
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-12">
                                            <select class="form-control" id="gradeSelect">
                                                <option value="">Select Grade</option>
                                                @foreach($grades as $grade)
                                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                @endforeach
                                            </select>
                                              <a href="">Add new grade</a>

                                        </div>
                                        <!-- Purchase price input -->
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                                            <input type="text" class="form-control" id="purchasePrice" placeholder="Total Amount">
                                        </div>
                                        <!-- Add Goods button -->
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                                            <button type="button" class="form-control btn btn-info" id="addDeviceBtn">Add Goods</button>
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

               <div id="imeiSection" style="display: none;">
                <h2>Add IMEI Numbers</h2>
                <input type="text" id="imeiInput" placeholder="IMEI">
                <button id="addImeiBtn">Add IMEI</button>
            </div>

            <!-- Display Added Devices and IMEI Numbers -->
       
       <div class="container-fluid"> 

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
                      <h6>  GB</h6>
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

                                       </div>
                    



      <div class="row">
        <div class="col-lg-12">
            <div class="row-imie p-3 " id="row-imie">
          
              <div id="deviceList" class="">
               
                <!-- Devices and IMEI numbers will be displayed here -->
            </div>
         </div>
        </div>
      </div>

      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 d-flex justify-content-center">
          <button class="btn btn-success m-3">Create Batch</button>
          <button class="btn btn-danger m-3">Cancel Batch</button>

        </div>
      </div>
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
{{-- <script>
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

</script> --}}



{{-- <script>
    $(document).ready(function() {
        // Add a New Device
        $('#addDeviceBtn').click(function() {
            var selectedDevice = $('#deviceSelect').val();
            var selectedGrade = $('#gradeSelect').val();
            var purchasePrice = $('#purchasePrice').val();

            // Make an AJAX request to store the device
            $.ajax({
                type: 'POST',
                url: "{{ route('add-purchase-device') }}",
                data: {
                    device_id: selectedDevice,
                    grade_id: selectedGrade,
                    purchase_price: purchasePrice,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Show the IMEI input section
                    $('#imeiSection').show();
                    // Store the device ID
                    var deviceID = response.device_id;
                    // Attach the device ID to the Add IMEI button
                    $('#addImeiBtn').data('device_id', deviceID);
                    // Display device name and grade name
                    var deviceName = $('#deviceSelect option:selected').text();
                    var gradeName = $('#gradeSelect option:selected').text();
                    $('#deviceName').text(deviceName);
                    $('#gradeName').text(gradeName);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        // Add IMEI Number
        $('#addImeiBtn').click(function() {
            var deviceID = $(this).data('device_id');
            var imei = $('#imeiInput').val();

            // Make an AJAX request to store the IMEI number
            $.ajax({
                type: 'POST',
                url: "{{ route('add-imei') }}",
                data: {
                    device_id: deviceID,
                    imei: imei,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Add the IMEI number to the device list
                    $('#devices').append('<li>' + response.imei + '</li>');
                    // Clear the IMEI input
                    $('#imeiInput').val('');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script> --}}




<script>
    $(document).ready(function() {
    // Add a New Device
    $('#addDeviceBtn').click(function() {
        var selectedDevice = $('#deviceSelect').val();
        var selectedGrade = $('#gradeSelect').val();
        var purchasePrice = $('#purchasePrice').val();

        $('#loader').show();
        // Make an AJAX request to store the device
        $.ajax({
            type: 'POST',
            url: "{{ route('add-purchase-device') }}",
            data: {
                device_id: selectedDevice,
                grade_id: selectedGrade,
                purchase_price: purchasePrice,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {

                $('#loader').hide();
                console.log(response);
                // Create a new section for the added device
                var deviceSection = $('<div class="device-section">');
                deviceSection.data('device-id', response.device_id); // Store the device_id
                // deviceSection.append('<h2>' + response.deviceName + '</h2>');

                // Create a container for IMEI numbers
                var imeiContainer = $('<div id="arrow-click" class="imei-container items p-3 row">');
                 
                imeiContainer.append('   <div  class=" right-icon-img col-lg-1 col-md-1 col-sm-1 col-12">'+
                       '</div>');


                imeiContainer.append('<div class="col-lg-2 col-md-2 col-sm-2 col-12"><h5>' + response.deviceName + '</h5></div>');
                imeiContainer.append('<div class="col-lg-2 col-md-2 col-sm-2 col-12"><h5></h5></div>');

                imeiContainer.append('<div class="col-lg-1 col-md-1 col-sm-1 col-12"><h5>Green</h5></div>');
                imeiContainer.append('<div class="col-lg-1 col-md-1 col-sm-1 col-12"><h5>64</h5></div>');
                imeiContainer.append('<div class="col-lg-1 col-md-1 col-sm-1 col-12"><h5>A++</h5></div>');
                imeiContainer.append('<div class="col-lg-1 col-md-1 col-sm-1 col-12"><h5>draft</h5></div>');

                imeiContainer.append('<div class="col-lg-1 col-md-1 col-sm-1 col-12"><input class="form-control" text="type" value="5"/></div>');
                imeiContainer.append('<div class="col-lg-1 col-md-1 col-sm-1 col-12"><input class="form-control" tyep="text"/></div>');
                imeiContainer.append('<div class="col-lg-1 col-md-1 col-sm-1 col-12">10 ADE</div>');





                // IMEI input
                imeiContainer.append('<input type="text" class="imei-input form-control" placeholder="IMEI" />' );

                // Add IMEI button
                imeiContainer.append('<button id="add-new-imi-btn" class="add-imei-btn btn btn-info">Add new IMEI</button>');

                // List to display IMEI numbers
                imeiContainer.append('<ol class="imei-list imie-form-inner"></ol>');
                // imeiContainer.append('<i id="delete-model-section" class="fa fa-facebook">X</i>');


                deviceSection.append(imeiContainer);

                // Append the new device section to the deviceList
                $('#deviceList').append(deviceSection);

                // Clear input fields
                $('#deviceSelect').val('');
                $('#gradeSelect').val('');
                $('#purchasePrice').val('');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Add IMEI Number
    $(document).on('click', '.add-imei-btn', function() {
        var imeiInput = $(this).siblings('.imei-input');
        var deviceID = $(this).closest('.device-section').data('device-id');
        var imei = imeiInput.val();

        // Make an AJAX request to store the IMEI number
        $.ajax({
            type: 'POST',
            url: "{{ route('add-imei') }}",
            data: {
                device_id: deviceID,
                imei: imei,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Add the IMEI number to the corresponding device's list
                var imeiList = imeiInput.siblings('.imei-list');
                imeiList.append('<li id="row">' + response.imei + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-danger" id="DeleteRow" type="button" data="'+ response.imei +'">'+ 
                '<i class="bi bi-trash">  <h6 class="cross mini">  &times;</h6></i></button> </div></div> </div> </li>');

                // Clear the IMEI input
                imeiInput.val('');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

// document.addEventListener("DOMContentLoaded", function() {
//          document.getElementById("#arrow-click").click(function(){
//       console.log('hi');


// });

// });



 
});






</script>
@endsection
