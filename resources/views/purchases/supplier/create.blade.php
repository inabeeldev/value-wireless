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

<form class="form-group batch-form" action="index.html" method="post">
<div class="form-group">
<label for="">Supplier Name</label>
<input type="text" name="" value="" class="form-control" required>
</div>




<div class="form-group">
<label for="">Email</label>
<input type="email" name="" value"" class="form-control" required>
</div>
<div class="form-group">
<label for="">Phone No</label>
<input type="number" name="" value"" class="form-control" required>
</div>

<div class="form-group">
<label for="">Address</label>
<input type="text" name="" value"" class="form-control">
</div>


<div class="form-group">
<label for="">Comment</label>
<textarea name="name" rows="4" style="width:100%"></textarea>
</div>


<div class="d-flex justify-content-center">
  <input class="btn btn-info text-white" type="submit" name="" value="Add Supplier">

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
    @endsection
