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
                            <div class="col-12">
                              <div class="card">
                                 <div class="card-body">
                                    <h2 class="card-title">WareHouse</h2>
                                       <a href="{{route('warehouse.create')}}"class="btn btn-success">Add New Warehouse</a>
                                              </br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                              style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                  <tr>
                                                   <th>ID</th>
                                                   <th>Name</th>
                                                   <th>Location</th>
                                                  </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                        <td>1</td>
                                                        <td>+535353535</td>
                                                        <td>iphone</td>
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
@sectionend
