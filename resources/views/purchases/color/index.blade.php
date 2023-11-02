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
              <div class="row">
                @include('layouts.messages')
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Color</h4>
                      <a href="{{route('color.create')}}"class="btn btn-success">Add New Color</a>
                    </p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Color Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                            @foreach ($colors as $color)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $color->name }}</td>

                                <td><a href="{{ route('color.edit', $color->id) }}" class="btn btn-info">Edit</a>
                                    &nbsp;<a class="btn btn-danger pl-3" href="javascript:void(0)"
                                    id="delete-color"
                                    data-url="{{ route('color.destroy', $color->id) }}">Delete</a></td>


                              </tr>
                            @endforeach


                      </tbody>
                    </table>
                  </div>
                </div>
              </div> <!-- end col -->
            </div> <!-- end row -->
          </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
      </div>
    </div>
  </div>
</div>
</div>




<!-- Delete Modal start -->
<div class="modal fade" id="exampleModal71" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Color Deleted Successfully</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
<!-- Delete Modal end -->
@endsection

@section('customJS')
<script type="text/javascript">

    $(document).ready(function () {

        $('table').on('click', '#delete-color', function () {

          var colorURL = $(this).data('url');
          var trObj = $(this);

          if(confirm("Are you sure you want to remove this Color?") == true){
                $.ajax({
                    url: colorURL,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
                        trObj.parents("tr").remove();
                        let modal = bootstrap.Modal.getOrCreateInstance(document.getElementById('exampleModal71'))
                        modal.show();
                        modal.hide();
                    }
                });
          }

       });

    });

</script>
@endsection
