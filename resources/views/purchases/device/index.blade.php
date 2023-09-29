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
                      <h4 class="card-title">Device</h4>
                      <a href="{{route('device.create')}}"class="btn btn-success">Add New device</a>
                    </p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Device Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                              <td>1</td>
                              <td>Iphone 11 Black 22 GB</td>
                              <td><a href="#" class="btn btn-info">Edit</a><a class="btn btn-danger pl-3">Delete</a></td>
                            </tr>
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
