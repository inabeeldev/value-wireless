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
