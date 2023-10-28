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

                <div class="col-lg-3 col-12 bg-white p-4 m-3">
                      <h3><a href="{{route('supplier.index')}}">Suppliers</a></h3>
                </div> <!-- end row -->


                <div class="col-lg-3 col-12 bg-white p-4 m-3">

                     <h3><a href="{{route('warehouse.index')}}">Warehouse</a></h3>
                </div> <!-- end row -->


                <div class="col-lg-3 col-12 bg-white p-4 m-3">
               <h3><a href="{{route('device.index')}}">Device</a></h3>
                </div>


                <!-- end row -->
                <div class="col-lg-3 col-12 bg-white p-4 m-3">
                    <h3><a href="{{route('manufacturer.index')}}">Manufacturer</a></h3>
                </div> <!-- end row -->

                 <div class="col-lg-3 col-12 bg-white p-4 m-3">
                                 <h3><a href="{{route('color.index')}}">Color</a></li>
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

 {{-- create grade ajax start --}}
 <script>
    $("#gradeForm").submit(function(event) {
        event.preventDefault();
        var element = $(this);
        $.ajax({
            url: '{{ route('grade.store') }}',
            type: 'post',
            data: element.serializeArray(),
            dataType: 'json',
            success: function(response){

                if (response['status'] == true) {

                    window.location.href = "{{ route('grade.index') }}"

                    $('#name').removeClass('is-invalid')
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


                }

            }, error: function(jqXHR, exception){
                console.log('went wrong');
            }

        })
    });
</script>
{{-- create grade ajax end --}}

@endsection
