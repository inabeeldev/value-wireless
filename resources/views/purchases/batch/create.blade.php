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
                  <form class="form-group batch-form" id="batchForm" name="batchForm" action=""  method="post">
                    <div class="form-group">
                      <label for="">Custom Batch No</label>
                      <input type="text" name="batch_no"  class="form-control" id="batch_no">
                      <p></p>
                    </div>
                    <div class="form-group">
                      <label for="">Warehouse *</label>
                      <select class=" select2 form-control" name="warehouse_id" class="form-control" id="warehouse_id">
                        @foreach ($warehouses as $w)
                            <option value="{{ $w->id }}">{{ $w->name }}</option>
                        @endforeach
                      </select>
                      <p></p>
                      <button type="button" class="btn-create" data-bs-toggle="modal" data-bs-target="#warehouseModal">Create a new Warehouse</button>

                    </div>
                    <div class="form-group">
                      <label for="">Supplier</label>

                        <select name="supplier_id" class=" select2 form-control" id="supplier_id">
                            @foreach ($suppliers as $s)
                          <option value="{{ $s->id }}">{{ $s->name }}</option>
                            @endforeach
                        </select>
                        <p></p>
                        <button type="button" class="btn-create" data-bs-toggle="modal" data-bs-target="#myModal">Create a new Supplier</button>

                    </div>



                    <div class="form-group">
                      <label for="">Paid</label>
                      <input type="text" name="paid" placeholder="د.إ 0"  class="form-control" id="paid">
                      <p></p>
                    </div>
                    <div class="form-group">
                      <label for="">Comment</label>
                      <textarea name="comment" rows="4" style="width:100%" id="comment"></textarea>
                      <p></p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-info text-white" type="submit" name="" >Create</button>
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



  <!-- The Modal supplier start -->
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
          <form class="form-group batch-form" id="supplierForm1" name="supplierForm1" action=""  method="post">
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
  <!-- The Modal supplier end -->


  <!-- The Modal Warehouse start-->
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
          <form class="form-group batch-form" id="warehouseForm1" name="warehouseForm1" action=""  method="post">
              @csrf
              <div class="form-group">
                  <label for="">Warehouse Name</label>
                  <input class="form-control" name="name" type="text" id="w_name">
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
  <!-- The Modal Warehouse end -->

  @endsection




  @section('customJS')

 {{-- create batch ajax start --}}
 <script>
    $("#batchForm").submit(function(event) {
        event.preventDefault();
        var element = $(this);
        $.ajax({
            url: '{{ route('batch.store') }}',
            type: 'post',
            data: element.serializeArray(),
            dataType: 'json',
            success: function(response){

                if (response['status'] == true) {

                    window.location.href = "{{ route('batch.index') }}"

                    $('#batch_no').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    $('#supplier_id').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    $('#warehouse_id').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    $('#paid').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    $('#comment').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                }
                else {
                    var errors = response['errors'];
                    if (errors['batch_no']) {
                        $('#batch_no').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['batch_no']);
                    }
                    else {
                        $('#batch_no').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    }

                    if (errors['supplier_id']) {
                        $('#supplier_id').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['supplier_id']);
                    }
                    else {
                        $('#supplier_id').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    }
                    if (errors['warehouse_id']) {
                        $('#warehouse_id').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['warehouse_id']);
                    }
                    else {
                        $('#warehouse_id').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    }
                    if (errors['paid']) {
                        $('#paid').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['paid']);
                    }
                    else {
                        $('#paid').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    }
                    if (errors['comment']) {
                        $('#comment').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['comment']);
                    }
                    else {
                        $('#comment').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    }
                }

            }, error: function(jqXHR, exception){
                console.log('went wrong');
            }

        })
    });
</script>
{{-- create batch ajax end --}}

  {{-- create supplier ajax start --}}
    <script>
        $("#supplierForm1").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            $.ajax({
                url: '{{ route('supplier.store') }}',
                type: 'post',
                data: element.serializeArray(),
                dataType: 'json',
                success: function(response){

                    if (response['status'] == true) {

                        window.location.href = "{{ route('batch.create') }}"

                        $('#name').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        $('#email').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        $('#phone').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                    }
                    else {
                        var errors = response['errors'];
                        if (errors['name']) {
                            $('#name').addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['name']);
                        }
                        else {
                            $('#name').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        }

                        if (errors['email']) {
                            $('#email').addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['email']);
                        }
                        else {
                            $('#email').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        }
                        if (errors['phone']) {
                            $('#phone').addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['phone']);
                        }
                        else {
                            $('#phone').removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html('');
                        }
                    }

                }, error: function(jqXHR, exception){
                    console.log('went wrong');
                }

            })
        });
    </script>
  {{-- create supplier ajax end --}}

  {{-- create warehouse ajax start --}}
<script>
    $("#warehouseForm1").submit(function(event) {
        event.preventDefault();
        var element = $(this);
        $.ajax({
            url: '{{ route('warehouse.store') }}',
            type: 'post',
            data: element.serializeArray(),
            dataType: 'json',
            success: function(response){

                if (response['status'] == true) {

                    window.location.href = "{{ route('batch.create') }}"

                    $('#w_name').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    $('#location').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                }
                else {
                    var errors = response['errors'];
                    if (errors['name']) {
                        $('#w_name').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['name']);
                    }
                    else {
                        $('#w_name').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    }

                    if (errors['location']) {
                        $('#location').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['location']);
                    }
                    else {
                        $('#location').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    }
                }

            }, error: function(jqXHR, exception){
                console.log('went wrong');
            }

        })
    });
</script>
  {{-- create warehouse ajax end --}}


@endsection
