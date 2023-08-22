@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="main-content">

          <div class="page-content">
            <div class="container-fluid">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-12 bg-white p-4">
                  <form class="form-group batch-form" action="" method="post">
                    <div class="form-group">
                      <label for="">Custom Batch No</label>
                      <input type="text" name="" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="">Warehouse *</label>
                      <select class=" select2 form-control" name="" class="form-control">
                        <option value="">Lahore</option>
                        <option value="">Dubai</option>
                      </select>
                      <button type="button" class="btn-create" data-bs-toggle="modal" data-bs-target="#warehouseModal">Create a new Warehouse</button>

                    </div>
                    <div class="form-group">
                      <label for="">Supplier</label>

                        <select name="" class=" select2 form-control">
                            @foreach ($suppliers as $s)
                          <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @endforeach
                        </select>
<button type="button" class="btn-create" data-bs-toggle="modal" data-bs-target="#myModal">Create a new Supplier</button>

                    </div>



                    <div class="form-group">
                      <label for="">Paid</label>
                      <input type="text" name="" value="د.إ 0" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Comment</label>
                      <textarea name="name" rows="4" style="width:100%"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                      <input class="btn btn-info text-white" type="submit" name="" value="Create Batch">
                    </div>
                  </form>
                </div> <!-- end row -->
              </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- The Modal supplier -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Supplier</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form-group batch-form" id="supplierForm" name="supplierForm" action=""  method="post">
            <div class="form-group">
              <label for="">Supplier Name</label>
              <input type="text" name="name"  class="form-control" id="name" >
              <p></p>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email"  class="form-control" id="email">
              <p></p>
            </div>
            <div class="form-group">
              <label for="">Phone No</label>
              <input type="number" name="phone" class="form-control" id="phone">
              <p></p>
            </div>
            <div class="d-flex justify-content-center">
              <button class="btn btn-info text-white" type="submit" name="" >Create</button>
            </div>
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>




  <!-- The Modal Warehouse -->
  <div class="modal" id="warehouseModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Warehouse</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="form-group batch-form" id="warehouseForm" name="warehouseForm" action=""  method="post">
              @csrf
              <div class="form-group">
                  <label for="">Warehouse Name</label>
                  <input class="form-control" name="name" type="text" id="name">
                  <p></p>

              </div>

              <div class="form-group ">
                  <label for="">Location</label>
                  <input class="form-control " name="location" type="text" id="location" >
                  <p></p>

              </div>

              <div class="d-flex justify-content-center">
                  <button class="btn btn-info text-white"  type="submit">Create </button>
              </div>
      </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>


  @endsection
