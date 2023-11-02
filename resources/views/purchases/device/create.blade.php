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
                  <form class="form-group batch-form" id="deviceForm" name="deviceForm" action=""  method="post">
                    <div class="form-group">
                      <label for="">Manufacturer Name</label>

                      <select name="manufacturer_id" class="form-control" id="manufacturer_id">
                        <option value="">Select Manufacturer</option>
                        @foreach ($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                        @endforeach

                      </select>

                      <p></p>
                    </div>
                    <div class="form-group">
                        <label for="">Device Name</label>
                        <input type="text" name="name"  class="form-control" id="name">
                        <p></p>
                    </div>

                    <div class="form-group">
                      <label for="">Comment</label>
                      <textarea name="comment" rows="4" style="width:100%" id="comment"></textarea>
                      <p></p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-info text-white" type="submit"  >Create</button>
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
</div>

  <!-- The Modal Warehouse end -->

  @endsection




  @section('customJS')

 {{-- create device ajax start --}}
 <script>
    $("#deviceForm").submit(function(event) {
        event.preventDefault();
        var element = $(this);
        $.ajax({
            url: '{{ route('device.store') }}',
            type: 'post',
            data: element.serializeArray(),
            dataType: 'json',
            success: function(response){

                if (response['status'] == true) {

                    window.location.href = "{{ route('device.index') }}"

                    $('#name').removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('');
                    $('#manufacturer_id').removeClass('is-invalid')
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

                    if (errors['manufacturer_id']) {
                        $('#manufacturer_id').addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['manufacturer_id']);
                    }
                    else {
                        $('#manufacturer_id').removeClass('is-invalid')
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
{{-- create device ajax end --}}




@endsection
