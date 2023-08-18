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

                            <!-- start page title -->

                            <!-- end page title -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="card-title">Supplier</h2>
                                    <a href="{{route('supplier.create')}}"class="btn btn-success">Add New Supplier</a>
                                            </p>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Phone No</th>

                                                    <th>Email</th>
                                                    <th>Address</th>




                                                </tr>
                                                </thead>


                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>+535353535</td>
                                                    <td>iphone</td>

                                                    <td>18-8-2023</td>
                                                    <td>USA</td>

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
