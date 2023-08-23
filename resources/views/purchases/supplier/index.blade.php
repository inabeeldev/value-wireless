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
                              <td><a href="#" class="btn btn-info">Edit</a><a class="btn btn-danger pl-3">Delete</a></td>

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
@endsection
@section('customJS')
    <script>
        console.log('Demo JS')
    </script>
@endsection
