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
                                                <h2 class="card-title">Warehouses</h2>
                                                <a href="{{ route('warehouse.create') }}"class="btn btn-success">Add New
                                                    Warehouse</a>
                                                </br>
                                                <table class="table table-bordered dt-responsive nowrap" id="datatable"
                                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Location</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       @foreach ($warehouses as $w)
                                                         <tr>
                                                             <td>{{ $loop->iteration }}</td>
                                                             <td>{{ $w->name }}</td>
                                                             <td>{{ $w->location }}</td>
                                                             <td><a href="{{ route('warehouse.edit', $w->id) }}" class="btn btn-info">Edit</a>
                                                                &nbsp;<a class="btn btn-danger pl-3" href="javascript:void(0)"
                                                                id="delete-warehouse"
                                                                data-url="{{ route('warehouse.destroy', $w->id) }}">Delete</a></td>

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
    <div class="modal fade" id="exampleModal50" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Warehouse Deleted Successfully</h5>
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


        $('table').on('click', '#delete-warehouse', function () {

          var warehouseURL = $(this).data('url');
          var trObj = $(this);

          if(confirm("Are you sure you want to remove this Warehouse?") == true){
                $.ajax({
                    url: warehouseURL,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
                        trObj.parents("tr").remove();
                        let modal = bootstrap.Modal.getOrCreateInstance(document.getElementById('exampleModal50'))
                        modal.show();
                        modal.hide();
                    }
                });
          }

       });

    });

</script>
@endsection
