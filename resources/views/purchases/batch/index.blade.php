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
                      <h4 class="card-title">Batch</h4>
                      <a href="{{route('batch.create')}}"class="btn btn-success">Add New Batch</a>
                    </p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Batch No</th>
                          <th>Date</th>
                          <th>Supllier</th>
                          <th>Warehouse</th>
                          <th>Status</th>
                          <th>Order</th>
                          <th>Manager</th>
                          <th>Comment</th>
                          <th>Items added</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($batches as $b)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $b->batch_no }}</td>
                              <td>{{ $b->created_at->format('d/m/y') }}</td>
                              <td>{{ $b->supplier->name }}</td>
                              <td>{{ $b->warehouse->name }}</td>
                              <td><div class="badge-draft"> {{ $b->status == 'disable' ? 'Draft' : 'active' }} </div></td>
                              <td>Delivered</td>
                              <td>{{ Auth::user()->name }}</td>
                              <td>{{ $b->comment }}</td>
                              <td>50</td>
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
