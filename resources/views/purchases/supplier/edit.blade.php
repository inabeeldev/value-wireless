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
                  <form class="form-group batch-form" id="supplierForm2" name="supplierForm2" action=""  method="post">
                    @method('PUT')
                    <input type="hidden" id="editId" value="{{ $supplier->id }}">
                    <div class="form-group">
                      <label for="">Supplier Name</label>
                      <input type="text" name="name" value="{{ $supplier->name }}" class="form-control" id="name" >
                      <p></p>
                    </div>

                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" value="{{ $supplier->email }}" class="form-control" id="email">
                      <p></p>
                    </div>
                    <div class="form-group">
                      <label for="">Phone No</label>
                      <input type="number" name="phone" value="{{ $supplier->phone }}" class="form-control" id="phone">
                      <p></p>
                    </div>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-info text-white" type="submit" name="" >Update</button>
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
  @endsection


  @section('customJS')
    <script>
        $("#supplierForm2").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            var id= $("#editId").val();
            var url = '{{ route("supplier.update", ":id") }}';
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'POST',
                data: element.serializeArray(),
                dataType: 'json',
                success: function(response){

                    if (response['status'] == true) {

                        window.location.href = "{{ route('supplier.index') }}"

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
@endsection
