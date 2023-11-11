@extends('layouts.app')

@section('content')


<style type="text/css">
  

  .col-lg-2.col-12.p-4.m-3 {
    border-radius: 20px;
}

  .col-lg-2.col-12.p-4.m-3  h3 {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

</style>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="main-content">

          <div class="page-content">
            <div class="container-fluid">
              <div class="row d-flex ">

                <div class="col-lg-2 col-12 bg-success p-4 m-3">
                      <h3><a href="{{route('supplier.index')}}" class="text-white">Suppliers</a>
                     <i class="fa fa-users text-white"></i>
                       </h3>
                </div>


                <div class="col-lg-2 col-12 bg-danger p-4 m-3 " >
              
                     <h3><a href="{{route('warehouse.index')}}" class="text-white">Warehouse</a>
                     <i class="fa fa-home text-white"></i>
                     </h3>
                </div>


                <div class="col-lg-2 col-12 bg-info p-4 m-3">
               <h3><a href="{{route('device.index')}}" class="text-white">Device</a>
                     <i class="fa fa-phone text-white"></i>

                   </h3> 
                </div> 


               
                <div class="col-lg-2 col-12 bg-primary p-4 m-3 ">
                    <h3><a href="{{route('manufacturer.index')}}" class="text-white">Manufacturer</a>
                     <i class="fa fa-user text-white"></i>

                   </h3>
                </div>

                 <div class="col-lg-2 col-12 bg-warning p-4 m-3">
                                 <h3><a href="{{route('color.index')}}" class="text-white">Color</a>
                     <i class="fa fa-eyedropper text-white"></i>

                   </h3>
                </div>


                 <div class="col-lg-2 col-12 bg-dark p-4 m-3">
                                 <h3><a href="{{route('gb.index')}}" class="text-white">GB</a>
                     <i class="fa fa-hdd-o text-white"></i>

                   </h3>
                </div>


                      <div class="col-lg-2 col-12 bg-success p-4 m-3 ">
                                 <h3><a href="{{route('grade.index')}}" class="text-white">Grade</a>
                     <i class=" fa fa-mobile-phone text-white"></i>
                   </h3>
                </div> 
                <!-- end row -->





            
           
         
           



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
