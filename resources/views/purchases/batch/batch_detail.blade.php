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
                          <p> <strong>  Warehouse</strong></p>
                          <p> <strong>Lahore</strong></p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="card">
                        <div class="card-body detail">
                          <p> <strong>  Warehouse</strong></p>
                          <p> <strong>Lahore</strong></p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="card">
                        <div class="card-body detail">
                          <p> <strong>  Warehouse</strong></p>
                          <p> <strong>Lahore</strong></p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                      <div class="card">
                        <div class="card-body detail">
                          <p> <strong>  Warehouse</strong></p>
                          <p> <strong>Lahore</strong></p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              <p> <b>   Custom Batch N</b> 11111</p>
                  </div>
                </div>
              </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="row">
                     <div class="col-12">
                      <!-- Add Device Form -->
                      <form action="" method="">  
                  <div class="card">
                    <div class="card-body">
                <div class="container-fluid">
                  <div class="row">
                     <h2> Add Devices</h2>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                       <input type="" name="" class="form-control" placeholder="Goods">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12">
                       <select class="form-control"> 
                        <option>  A HSO </option>
                        <option>  A+ HSO </option>
                        <option>  AAA</option>
                        <option>  AAA W/Box</option>
                        <option>  B HSO</option>
                        <option>  B+ HSO</option>
                        <option>  BNS</option>
                       </select>
                        </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12">
                       <input type="" name="" class="form-control" placeholder="Quantity" disabled="disableed">
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                       <input type="" name="" class="form-control" placeholder="Purchase price">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-12">
                       <input type="submit" name="" value="Add Goods" class="form-control btn btn-info">
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
                  <form action="" method="">
                         <!-- item -->
                         <div class="row items">  
                           <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                       <img class="right-icon-img" src="{{ asset('public/images/icon-right.png') }}">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                       <h6>Apple iPhone 11 64GB</h6>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                     <h6></h6>
                    </div>

                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6>  </h6>
                    </div>

                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                      <h6>  A HSO</h6>
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
                      <input class="form-control" type="number" name="" placeholder="Enter or scan IMEI/SN/barcode or start typing names of goods" />
                         <div id="add-imie-btn"><img class="tik-icon" src="{{ asset('public/images/tik-icon.PNG')}}"></div>
                   
                         </div>
                         <!-- new  IMIES list -->
                      <table class="imie-table"> 
                      </table>
                      </div>  

                    </div>

                  </div>
                  <input type="Submit" name="" value="Submit" class="btn btn-primary mt-3">
              </form>
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
console.log('Demo JS')
</script>
@endsection
