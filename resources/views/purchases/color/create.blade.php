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
                  <form class="form-group batch-form" id="colorForm" name="colorForm" action=""  method="post">
                    <div class="form-group">
                      <label for="">Color Name</label>
                      <input type="text" name="name"  class="form-control" id="name">
                      <p></p>
                    </div>

                    <div class="form-group">
                      <label for="">Comment</label>
                      <textarea name="comment" rows="4" style="width:100%" id="comment"></textarea>
                      <p></p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-info text-white" type="submit" >Create</button>
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

 {{-- create color ajax start --}}
 <script>
    $("#colorForm").submit(function(event) {
        event.preventDefault();
        var element = $(this);
        $.ajax({
            url: '{{ route('color.store') }}',
            type: 'post',
            data: element.serializeArray(),
            dataType: 'json',
            success: function(response){

                if (response['status'] == true) {

                    window.location.href = "{{ route('color.index') }}"

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
{{-- create color ajax end --}}

@endsection
