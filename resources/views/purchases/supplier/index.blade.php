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
                      <h2 class="card-title">Supplier</h2>
                      <a href="{{route('supplier.create')}}"class="btn btn-success">Add New Supplier</a>
                    </p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone No</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($suppliers as $s)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $s->name }}</td>
                              <td>{{ $s->email }}</td>
                              <td>{{ $s->phone }}</td>
                              <td><a href="{{ route('supplier.edit', $s->id) }}" class="btn btn-info">Edit</a>
                                &nbsp;<a class="btn btn-danger pl-3" href="javascript:void(0)"
                                id="delete-supplier"
                                data-url="{{ route('supplier.destroy', $s->id) }}">Delete</a></td>
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
<div class="modal fade" id="exampleModal51" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supplier Deleted Successfully</h5>
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

        $('table').on('click', '#delete-supplier', function () {

          var supplierURL = $(this).data('url');
          var trObj = $(this);

          if(confirm("Are you sure you want to remove this Supplier?") == true){
                $.ajax({
                    url: supplierURL,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data) {
                        trObj.parents("tr").remove();
                        let modal = bootstrap.Modal.getOrCreateInstance(document.getElementById('exampleModal51'))
                        modal.show();
                        modal.hide();
                    }
                });
          }

       });

    });

</script>
@endsection
